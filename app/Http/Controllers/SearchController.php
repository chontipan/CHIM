<?php

namespace App\Http\Controllers;

use App\CrimePlace;
use App\PlaceGeneral;
use Illuminate\Http\Request;
use App\Person;
use App\Criminal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
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
        //return $request;
       // if ($keyword) {
            $keyword = $request->get('keyword');


        $persons = Person::Where('identity', 'like', "%$keyword%")
            ->orWhere('fullname', 'like', "%$keyword%")
            ->orderBy('created_at', 'desc')
            ->paginate(20);


            $criminals = Criminal::Where('identity', 'like', "%$keyword%")
                ->orWhere('fullname', 'like', "%$keyword%")
                ->orderBy('created_at', 'desc')
                ->paginate(20);


        $places = PlaceGeneral::Where('name', 'like', "%$keyword%")
            ->orWhere('owner_name', 'like', "%$keyword%")
            ->orWhere('manager_name', 'like', "%$keyword%")
            ->orWhere('owner_identity', 'like', "%$keyword%")
            ->orWhere('manager_identity', 'like', "%$keyword%")
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $crime_places = CrimePlace::Where('name', 'like', "%$keyword%")
            ->orWhere('owner_name', 'like', "%$keyword%")
            ->orWhere('manager_name', 'like', "%$keyword%")
            ->orWhere('owner_identity', 'like', "%$keyword%")
            ->orWhere('manager_identity', 'like', "%$keyword%")
            ->orderBy('created_at', 'desc')
            ->paginate(20);


      


            return view('user.search')
                ->with('persons', $persons)
                ->with('criminals', $criminals)
                ->with('places', $places)
                ->with('keyword', $keyword)
                ->with('crime_places', $crime_places)
                //->with('person_count', $person_count)
               // ->with('criminal_count', $criminal_count)
               // ->with('place_count', $place_count)
                ;
       // }

    }

    public function personDelete(Request $request, $id, $keyword)
    {
        $currentUser = Auth::id();
        $personDelete = Person::where('id', $id)->first();
        $personDelete->deleted_by()->associate($currentUser);
        $personDelete->save();
        $personDelete->delete();
        return redirect("/search?keyword=$keyword");
    }
    public function criminalDelete(Request $request, $id, $keyword)
    {
        $currentUser = Auth::id();
        $criminalDelete = Criminal::where('id', $id)->first();
        $criminalDelete->deleted_by()->associate($currentUser);
        $criminalDelete->save();
        $criminalDelete->delete();
        return redirect("/search?keyword=$keyword");
    }

    public function generalPlaceDelete(Request $request, $id, $keyword)
    {
        $currentUser = Auth::id();
        $placeDelete = PlaceGeneral::where('id', $id)->first();
        $placeDelete->deleted_by()->associate($currentUser);
        $placeDelete->save();
        $placeDelete->delete();
        return redirect("/search?keyword=$keyword");
    }

    public function generalCrimePlaceDelete(Request $request, $id, $keyword)
    {
        $currentUser = Auth::id();
        $placeDelete = CrimePlace::where('id', $id)->first();
        $placeDelete->deleted_by()->associate($currentUser);
        $placeDelete->save();
        $placeDelete->delete();
        return redirect("/search?keyword=$keyword");
    }


}
