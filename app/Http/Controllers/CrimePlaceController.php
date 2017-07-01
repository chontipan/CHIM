<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrimePlace;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Matriphe\Imageupload\Imageupload;
use Matriphe\Imageupload\ImageuploadFacade;
use Illuminate\Http\UploadedFile;

class CrimePlaceController extends Controller
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

            $places = DB::table('crime_places')
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

            return view('user.crime_place.index')
                ->with('places', $places)
                ->with('keyword', $keyword);
        }else {

            $places = CrimePlace::orderBy('created_at', 'desc')
                ->paginate(20);

           // $all = CrimePlace::count();
            //return $persons;
            return view('user.crime_place.index')
                ->with('places', $places)
                //->with('all', $all)
                ->with('keyword', $keyword);
        }

    }

    public function create(Request $request)
    {
        return view('user.crime_place.create');
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
        $newPlace = new CrimePlace();

        $newPlace->fill($form);
        $currentUser = Auth::id();

        $newPlace->created_by()->associate($currentUser);
        $newPlace->time_at = $date;
        $newPlace->save();
        return redirect("/crime_place");
        //$lastInsertedId = $newPlace->id;

       // return redirect("/crime_place/$lastInsertedId/map");
       // $fill = $request->all();
    //    $fill = $request->get('place');
     //   $location = $request->get('marker');
     //   $currentUser = Auth::id();
    //    $newPlace = new CrimePlace();
     //   $newPlace->fill($fill);
    //    $newPlace->fill($location);
        //$newPlace->fill($form);
        //$currentUser = Auth::id();

    //    $newPlace->created_by()->associate($currentUser);

     //   $newPlace->save();
    //    return $newPlace;
        //$lastInsertedId = $newPlace->id;
        //return redirect("/general_place/$lastInsertedId/map");
        //return redirect("/general_place/$lastInsertedId/map");
    }
    public function postDelete(Request $request, $id)
    {
        $currentUser = Auth::id();
        $placeDel = CrimePlace::where('id', $id)->first();
        $placeDel->deleted_by()->associate($currentUser);
        $placeDel->save();
        $placeDel->delete();
        return redirect('/crime_place');

    }

    public function map()
    {
        $locations = CrimePlace::all();
        return view('user.crime_place.map', compact('locations'));
    }

    public function addMap(Request $request, $id)
    {
        $place = CrimePlace::where('id', $id)->first();
        return view('user.crime_place.addmap')
            ->with('place', $place);
    }
    public function postAddMap(Request $request, $id)
    {
        $lat = $request->get('lat');
        $lng = $request->get('lng');

        $placeMap = CrimePlace::where('id', $id)->first();
        $placeMap->lat = $lat;
        $placeMap->lng = $lng;
        $placeMap->save();





        return redirect('/crime_place');
    }



}
