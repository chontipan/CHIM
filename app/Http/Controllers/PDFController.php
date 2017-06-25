<?php

namespace App\Http\Controllers;

use App\Criminal;
use App\User;
use App\PlaceGeneral;
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


        return $pdf->stream();



    }


    public function pdfPersonAnnounce($id)
    {
        $person = Person::where('id', $id)->first();


        $t=time();
        $person->time = date("Y-m-d-h:i:s",$t);



        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.person_announce', ["person"=>$person,"public_path"=>public_path()]);


        return $pdf->stream();



    }

    public function pdfCriminal($id)
    {
        $criminal = Criminal::where('id', $id)->first();


        $t=time();
        $criminal->time = date("Y-m-d-h:i:s",$t);

       // return $criminal->created_at;


        $police = User::where('id', $criminal->user_created)->first();

        $criminal->rank = $police->rank;
        $criminal->police_name = $police->name;


        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.criminal', ["criminal"=>$criminal,"public_path"=>public_path()]);


        return $pdf->stream();



    }

    public function pdfCriminalAnnounce($id)
    {
        $criminal = Criminal::where('id', $id)->first();


        $t=time();
        $criminal->time = date("Y-m-d-h:i:s",$t);



        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.criminal_announce', ["criminal"=>$criminal,"public_path"=>public_path()]);


        return $pdf->stream();



    }

    public function pdfGeneralPlace($id)
    {
        $place = PlaceGeneral::where('id', $id)->first();


        $t=time();
        $place->time = date("Y-m-d-h:i:s",$t);



        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.general_place', ["place"=>$place]);


        return $pdf->stream();

    }

    public function pdfGeneralPlaceAnnounce($id)
    {
        $place = PlaceGeneral::where('id', $id)->first();
        $t=time();
        $place->time = date("Y-m-d-h:i:s",$t);

        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

      //  return view('user.pdf.general_place')
      //      ->with('place',$place);

        $pdf = Pdf::loadView('user.pdf.general_place_announce', ["place"=>$place]);

        return $pdf->stream();


        //$html = view('user.pdf.general_place')->with('place',$place)->render();
       //  return $html;
        //$pdf= new \mPDF();
       // $pdf->writeHTML($html);
     //   return $pdf;
       // $pdf->stream();
        //$pdf->Output();
    }


}
