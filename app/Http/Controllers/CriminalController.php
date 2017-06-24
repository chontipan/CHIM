<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criminal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Matriphe\Imageupload\Imageupload;
use Matriphe\Imageupload\ImageuploadFacade;
use Illuminate\Http\UploadedFile;

class CriminalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        //return $request;
        if ($keyword) {

            $keyword = $request->get('keyword');

            $criminals = Criminal::Where('identity', 'like', "%$keyword%")
                ->orWhere('fullname', 'like', "%$keyword%")
                ->orderBy('created_at', 'desc')
                ->paginate(20);
            //return $persons;

            return view('user.criminal.index')
                ->with('keyword', $keyword)
                ->with('criminals', $criminals);
        }else {

            $criminals = Criminal::orderBy('created_at', 'desc')
                ->paginate(20);
            //return $persons;
            return view('user.criminal.index')
                ->with('criminals', $criminals)
                ->with('keyword', $keyword);
        }

    }

    public function create(Request $request)
    {
        return view('user.criminal.create');
    }

    public function postCreate(Request $request)
    {

        if($request->hasFile('pic_path')) {
            $result = ImageuploadFacade::upload($request->file('pic_path'));
            $dimension = $result['dimensions'];
            $size400 = $dimension['size400'];
            $file_path = $size400['filedir'];
        }

        $form = $request->get('criminal');
        $newCriminal = new Criminal();

        $newCriminal->fill($form);

        if($request->hasFile('pic_path')){
            $newCriminal->pic_path = $file_path;
        }

        $currentUser = Auth::id();

        $newCriminal->created_by()->associate($currentUser);
        $newCriminal->save();
        return redirect('/criminal');
    }
    public function postDelete(Request $request, $id)
    {
        $currentUser = Auth::id();
        $criminalDelete = Criminal::where('id', $id)->first();
        $criminalDelete->deleted_by()->associate($currentUser);
        $criminalDelete->save();
        $criminalDelete->delete();
        return redirect('/criminal');
    }
}
