<?php

namespace App\Http\Controllers;

use App\CrimePlace;
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


        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized('-%H:%M:%S');

        $person->time = "$daymonth$year$hour";
       // $pdf = app('dompdf.wrapper');
       // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);

        $file_name= "$person->fullname-$person->time";

        return $pdf->stream("$file_name.pdf");



    }


    public function pdfPersonAnnounce($id)
    {
        $person = Person::where('id', $id)->first();


        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized('-%H:%M:%S');


        // $t=time();
        //$place->time = date("d/m/Y",$t);
        $person->time = "$daymonth$year$hour";



        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.person_announce', ["person"=>$person,"public_path"=>public_path()]);


        $file_name= "$person->fullname-$person->time";
        return $pdf->stream("$file_name.pdf");



    }

    public function pdfCriminal($id)
    {
        $criminal = Criminal::where('id', $id)->first();


        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized('-%H:%M:%S');


        // $t=time();
        //$place->time = date("d/m/Y",$t);
        $criminal->time = "$daymonth$year$hour";

       // return $criminal->created_at;


        $police = User::where('id', $criminal->user_created)->first();

        $criminal->rank = $police->rank;
        $criminal->police_name = $police->name;


        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.criminal', ["criminal"=>$criminal,"public_path"=>public_path()]);
        $file_name= "$criminal->fullname-$criminal->time";
        return $pdf->stream("$file_name.pdf");




    }

    public function pdfCriminalAnnounce($id)
    {
        $criminal = Criminal::where('id', $id)->first();


        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized('-%H:%M:%S');


        // $t=time();
        //$place->time = date("d/m/Y",$t);
        $criminal->time = "$daymonth$year$hour";



        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.criminal_announce', ["criminal"=>$criminal,"public_path"=>public_path()]);


        $file_name= "$criminal->fullname-$criminal->time";
        return $pdf->stream("$file_name.pdf");



    }

    public function pdfGeneralPlace($id)
    {
        $place = PlaceGeneral::where('id', $id)->first();


        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized('-%H:%M:%S');


        // $t=time();
        //$place->time = date("d/m/Y",$t);
        $place->time = "$daymonth$year$hour";



        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();



        $pdf = Pdf::loadView('user.pdf.general_place', ["place"=>$place,"public_path"=>public_path()]);


        $file_name= "$place->name-$place->time";
        return $pdf->stream("$file_name.pdf");
    }


    public function pdfGeneralPlacePics($id)
    {
        $place = PlaceGeneral::where('id', $id)->first();


        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized('-%H:%M:%S');


        // $t=time();
        //$place->time = date("d/m/Y",$t);
        $place->time = "$daymonth$year$hour";



        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();



        $pdf = Pdf::loadView('user.pdf.place_pic', ["place"=>$place,"public_path"=>public_path()]);


        $file_name= "$place->name-$place->time";
        return $pdf->stream("$file_name.pdf");
    }

    public function pdfCrimePlacePics($id)
    {
        $place = CrimePlace::where('id', $id)->first();


        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized('-%H:%M:%S');


        // $t=time();
        //$place->time = date("d/m/Y",$t);
        $place->time = "$daymonth$year$hour";



        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();



        $pdf = Pdf::loadView('user.pdf.place_pic', ["place"=>$place,"public_path"=>public_path()]);


        $file_name= "$place->name-$place->time";
        return $pdf->stream("$file_name.pdf");
    }


    public function pdfGeneralPlaceAnnounce($id)
    {
        $place = PlaceGeneral::where('id', $id)->first();
        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized(' %H:%M:%S');


        // $t=time();
        //$place->time = date("d/m/Y",$t);
        $place->time = "$daymonth$year$hour";

        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

      //  return view('user.pdf.general_place')
      //      ->with('place',$place);

        $pdf = Pdf::loadView('user.pdf.general_place_announce', ["place"=>$place,"public_path"=>public_path()]);
        $file_name= "$place->name-$place->time";
        return $pdf->stream("$file_name.pdf");


        //$html = view('user.pdf.general_place')->with('place',$place)->render();
       //  return $html;
        //$pdf= new \mPDF();
       // $pdf->writeHTML($html);
     //   return $pdf;
       // $pdf->stream();
        //$pdf->Output();
    }

    public function pdfCrimePlace($id)
    {
        $place = CrimePlace::where('id', $id)->first();


        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized('-%H:%M:%S');


        // $t=time();
        //$place->time = date("d/m/Y",$t);
        $place->time = "$daymonth$year$hour";



        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        $pdf = Pdf::loadView('user.pdf.crime_place', ["place"=>$place]);


        $file_name= "$place->name-$place->time";
        return $pdf->stream("$file_name.pdf");

    }

    public function pdfCrimePlaceAnnounce($id)
    {


        $place = CrimePlace::where('id', $id)->first();

        \Carbon\Carbon::setLocale('th');
        setlocale(LC_TIME,'th_TH');
        $date = \Carbon\Carbon::now();
        $daymonth = $date->formatLocalized('%d/%m/');
        $year = $date->year+543;
        $date = $date->addHour(7);
        $hour = $date->formatLocalized('-%H:%M:%S');


       // $t=time();
        //$place->time = date("d/m/Y",$t);
        $place->time = "$daymonth$year$hour";


        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('user.pdf.person', ["person"=>$person,"public_path"=>public_path()]);
        //return $pdf->stream();

        //  return view('user.pdf.general_place')
        //      ->with('place',$place);

        $pdf = Pdf::loadView('user.pdf.crime_place_announce', ["place"=>$place]);

        $file_name= "$place->name-$place->time";
        return $pdf->stream("$file_name.pdf");


        //$html = view('user.pdf.general_place')->with('place',$place)->render();
        //  return $html;
        //$pdf= new \mPDF();
        // $pdf->writeHTML($html);
        //   return $pdf;
        // $pdf->stream();
        //$pdf->Output();
    }


}
