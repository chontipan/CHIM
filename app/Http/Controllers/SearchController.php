<?php

namespace App\Http\Controllers;

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

            $persons = DB::table('persons')
                ->Where('identity', 'like', "%$keyword%")
                ->orWhere('fullname', 'like', "%$keyword%")
                ->whereNull('user_deleted')
                ->orderBy('created_at', 'desc')
                ->paginate(20);


            $criminals = DB::table('criminals')
                ->Where('identity', 'like', "%$keyword%")
                ->orWhere('fullname', 'like', "%$keyword%")
                ->whereNull('user_deleted')
                ->orderBy('created_at', 'desc')
                ->paginate(20);

            return view('user.search')
                ->with('persons', $persons)
                ->with('criminals', $criminals)
                ->with('keyword', $keyword);
       // }

    }



    public function personDelete(Request $request, $id, $keyword)
    {
        $currentUser = Auth::id();
        $personDelete = Person::where('id', $id)->first();
        $personDelete->deleted_by()->associate($currentUser);
        $personDelete->save();
        $personDelete->delete();
        return redirect('/search')
            ->with('keyword',$keyword);
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


}
