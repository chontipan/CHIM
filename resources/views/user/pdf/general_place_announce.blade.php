<!DOCTYPE html>
<html lang="EN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$place->name}}_export_{{$place->time}}</title>

    <style>
        @page {
            header: page-header;
            footer: page-footer;
        }
        body {
            font-family: garuda;
            font-size: 14pt;
        }
    </style>
</head>
<body>


<htmlpageheader name="page-header">


</htmlpageheader>

<htmlpagefooter name="page-footer">
    <?php
    \Carbon\Carbon::setLocale('th');
    setlocale(LC_TIME,'th_TH');
    $date = \Carbon\Carbon::now();
    $daymonth = $date->formatLocalized('%d/%m/');
    $year = $date->year+543;
    ?>

    <table width='100%' style='vertical-align: bottom; font-family: garuda; font-size: 8pt; color: #000000;  font-style: italic;'><tr>

            <td width='100%' style='text-align: right;'>พิมพ์เมื่อ {{$daymonth}}{{$year}}</td>

        </tr></table>
</htmlpagefooter>

<div class="row" style="text-align: center">
    <h3>แผนที่สังเขปสถานที่ทั่วไป</h3>

</div>

<div class="row" id="map" style="text-align: center">
<img src="http://maps.googleapis.com/maps/api/staticmap?center={{$place->lat}},{{$place->lng}}&zoom=16&size=800x500&markers=color:red%7C{{$place->lat}},{{$place->lng}}&key=AIzaSyBQUWojCfpRqjw_0SV9WPKac6R8_GRaFYk">

</div>
<div class="row" style="padding-top: 2em">
    <table align="center" border="0" width="100%">
        <ol>
    <tr>
        @if($place->name)
            <td colspan="4">ชื่อสถานที่ : <label><?php echo $place->name ?> </label></td>
        @else
            <td colspan="4">ชื่อสถานที่ : <label> - </label></td>
        @endif

    </tr>

            <tr>
                @if($place->address)
                    <td colspan="4">ที่อยู่ : <label><?php echo $place->address ?>

                            <?php echo "อำเภอ $place->district" ?>
                            <?php echo "จังหวัด $place->province" ?>
                        </label></td>
                @else
                    <td colspan="4">ที่อยู่ : <label> - </label></td>
                @endif
            </tr>


        </ol>
    </table>

</div>


</body>
</html>


