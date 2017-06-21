<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

use App\person;

class PDFController extends Controller
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
    public function pdfPerson($id)
    {
        $person = Person::where('id', $id)->first();


        $t=time();
        $person->time = date("Y-m-d-h:i:s",$t);



       // $pdf = app('dompdf.wrapper');
       // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);


        return $pdf->stream('document.pdf');



    }

}
