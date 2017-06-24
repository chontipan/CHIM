<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlaceGeneral;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Matriphe\Imageupload\Imageupload;
use Matriphe\Imageupload\ImageuploadFacade;
use Illuminate\Http\UploadedFile;

class GeneralPlaceController extends Controller
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

            $places = DB::table('general_places')
                ->Where('name', 'like', "%$keyword%")
                ->orWhere('owner_name', 'like', "%$keyword%")
                ->orWhere('owner_identity', 'like', "%$keyword%")
                ->orWhere('manager_name', 'like', "%$keyword%")
                ->orWhere('manager_identity', 'like', "%$keyword%")
                ->orWhere('province', 'like', "%$keyword%")
                ->orWhere('district', 'like', "%$keyword%")
                ->orderBy('created_at', 'desc')
                ->paginate(20);
            //return $persons;

            return view('user.place.index')
                ->with('places', $places)
                ->with('keyword', $keyword);
        }else {

            $places = PlaceGeneral::orderBy('created_at', 'desc')
                ->paginate(20);
            //return $persons;
            return view('user.place.index')
                ->with('places', $places)
                ->with('keyword', $keyword);
        }

    }

    public function create(Request $request)
    {
        return view('user.place.create');
    }

    public function postCreate(Request $request)
    {

        $form = $request->get('place');
        $newPlace = new PlaceGeneral();

        $newPlace->fill($form);
        $currentUser = Auth::id();

        $newPlace->created_by()->associate($currentUser);

        $newPlace->save();
        return redirect('/general_place');
    }
    public function postDelete(Request $request, $id)
    {
        $currentUser = Auth::id();
        $placeDel = PlaceGeneral::where('id', $id)->first();
        $placeDel->deleted_by()->associate($currentUser);
        $placeDel->save();
        $placeDel->delete();
        return redirect('/general_place');
    }

    public function map()
    {
        $locations = PlaceGeneral::all();
        return view('user.place.map', compact('locations'));
    }
}
