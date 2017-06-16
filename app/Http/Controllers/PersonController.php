<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
      public function generalIndex(Request $request)
      {
          //$userId = Auth::id();
          $persons = Person::all();
          //$branches = DB::table('branches')->where('created_by','=',$userId)->get();
          return view('user.general.index')
              ->with('persons', $persons);
      }

    public function generalCreate(Request $request)
    {
            return view('user.general.create');
    }

    public function postCreate(Request $request)
    {
       // $currentUser = Auth::id();
        $form = $request->get('branch');
        $branchNew = new Branch();
       // $branchNew->createdby()->associate($currentUser);
        $branchNew->fill($form);
        $branchNew->save();
        return redirect('/admin/branch');
    }

    public function edit(Request $request, $id)
    {
        $branch = Branch::where('id', $id)->first();
        return view('admin.branch.edit')
            ->with('branch', $branch);
    }

    public function postEdit(Request $request, $id)
    {
        $form = $request->get('branch');
        $branchEdit = Branch::where('id', $id)->first();
        $branchEdit->fill($form);
        $branchEdit->save();
        return redirect('/admin/branch');
    }

    public function postDelete(Request $request, $id)
    {
        $branchDelete = Branch::where('id', $id)->first();
        $branchDelete->delete();
        return redirect('/admin/branch');
    }
}
