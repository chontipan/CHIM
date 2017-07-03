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

            $all = PlaceGeneral::count();
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
        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('-%d-%m');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized(' %H:%M:%S');
        $date = "$year$daymonth$hour";

        $form = $request->get('place');
        $newPlace = new PlaceGeneral();

        $newPlace->fill($form);
        $currentUser = Auth::id();

        $newPlace->created_by()->associate($currentUser);
        $newPlace->time_at = $date;


        $newPlace->save();
            $request->session()->flash('msg',"บันทึกสถานที่ทั่วไปสำเร็จ");




        return redirect("/general_place");
       // $lastInsertedId = $newPlace->id;

        //return redirect("/general_place/$lastInsertedId/map");
    }
    public function postDelete(Request $request, $id)
    {
        $currentUser = Auth::id();
        $placeDel = PlaceGeneral::where('id', $id)->first();
        $placeDel->deleted_by()->associate($currentUser);
        $placeDel->save();
        $placeDel->delete();
        $request->session()->flash('msg',"ลบสถานที่ทั่วไปสำเร็จ");



        return redirect('/general_place');

    }

    public function map()
    {
        $locations = PlaceGeneral::all();
        return view('user.place.map', compact('locations'));
    }

    public function addMap(Request $request, $id)
    {
        $place = PlaceGeneral::where('id', $id)->first();
        return view('user.place.addmap')
            ->with('place', $place);
    }
    public function postAddMap(Request $request, $id)
    {
        $lat = $request->get('lat');
        $lng = $request->get('lng');

        $placeMap = PlaceGeneral::where('id', $id)->first();
        $placeMap->lat = $lat;
        $placeMap->lng = $lng;
        $placeMap->save();





        return redirect('/general_place');
    }



}
