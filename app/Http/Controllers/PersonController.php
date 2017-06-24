<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Matriphe\Imageupload\Imageupload;
use Matriphe\Imageupload\ImageuploadFacade;
use Illuminate\Http\UploadedFile;

class PersonController extends Controller
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

            $persons = Person::Where('identity', 'like', "%$keyword%")
                ->orWhere('fullname', 'like', "%$keyword%")
                ->orderBy('created_at', 'desc')
                ->paginate(20);
            //return $persons;

            return view('user.person.index')
                ->with('persons', $persons)
                ->with('keyword', $keyword);
        }else {

            $persons = Person::orderBy('created_at', 'desc')
                ->paginate(20);
            //return $persons;
            return view('user.person.index')
                ->with('persons', $persons)
                ->with('keyword', $keyword);
        }

    }

    public function create(Request $request)
    {
        return view('user.person.create');
    }

    public function postCreate(Request $request)
    {

        if($request->hasFile('pic_path')) {
            $result = ImageuploadFacade::upload($request->file('pic_path'));
            $dimension = $result['dimensions'];
            $size400 = $dimension['size400'];
            $file_path = $size400['filedir'];
        }

        $form = $request->get('person');
        $newPerson = new Person();

        $newPerson->fill($form);

        if($request->hasFile('pic_path')){
            $newPerson->pic_path = $file_path;
        }
        $currentUser = Auth::id();

        $newPerson->created_by()->associate($currentUser);

        $newPerson->save();
        return redirect('/person');
    }
    public function postDelete(Request $request, $id)
    {
        $currentUser = Auth::id();
        $personDelete = Person::where('id', $id)->first();
        $personDelete->deleted_by()->associate($currentUser);
        $personDelete->save();
        $personDelete->delete();
        return redirect('/person');
    }
}
