<!DOCTYPE html>
<html lang="EN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$place->name}}_export_{{$place->name}}</title>
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

<body>

<htmlpageheader name="page-header">
    <table width="100%" style="vertical-align: bottom; font-family: TH SarabunPSK; font-size: 14pt; color: #000000;  "><tr>
            <td width="20%"></td>
            <td width="30%" style="text-align: right; ">หน้า {PAGENO}</td>
            <td width="55%" style="text-align: right; "></td>
        </tr></table>

</htmlpageheader>

<htmlpagefooter name="page-footer">
<?php
    $user = Auth::user();
    \Carbon\Carbon::setLocale('th');
    setlocale(LC_TIME,'th_TH');
    $date = \Carbon\Carbon::now();
    $daymonth = $date->formatLocalized('%d/%m/');
    $year = $date->year+543;
?>

    <table width='100%' style='vertical-align: bottom; font-family: garuda; font-size: 8pt; color: #000000;  font-style: italic;'><tr>

            <td width='100%' style='text-align: right;'>พิมพ์โดย {{$user->name}} พิมพ์เมื่อ {{$daymonth}}{{$year}}</td>

        </tr></table>
</htmlpagefooter>

<table align="center" border="0" width="100%">
    <ol>
        <tr>
            <td colspan="4" align="center"><h3>แบบประวัติสถานที่ทั่วไป</h3></td>

        </tr>

        <tr>
            @if($place->name)
                <td colspan="4">1.ชื่อสถานที่ : <label><?php echo $place->name ?> </label></td>
            @else
                <td colspan="4">1.ชื่อสถานที่ : <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($place->adress)
                <td colspan="4">2.ที่คั้ง: <label><?php echo $place->adress ?> </label></td>
            @else
                <td colspan="4">2.ที่คั้ง : <label> - </label></td>
            @endif

        </tr>
        <tr>
            @if($place->tel)
                <td colspan="4">  โทร: <label><?php echo $place->tel ?> </label></td>
            @else
                <td colspan="4">  โทร: <label> - </label></td>
            @endif

        </tr>


        <tr>
            @if($place->owner_name)
                <td colspan="4">3. ชื่อเจ้าของ : <label>{{$place->owner_name}}</label></td>
            @else
                <td colspan="4">3. ชื่อเจ้าของ : <label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($place->owner_age)
                <td colspan="4">อายุ : <label><?php echo $place->owner_age ?> </label> ปี</td>
            @else
                <td colspan="4">อายุ : <label> - </label> ปี</td>
            @endif

        </tr>

        <tr>
            @if($place->owner_identity)
                <td colspan="4">  หมายเลขประจำตัวประชาชน :<label><?php echo $place->owner_identity ?></label></td>
            @else
                <td colspan="4">  หมายเลขประจำตัวประชาชน :<label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($place->owner_address_identity)
                <td colspan="4">  ที่อยู่ตามบัตรประชาชน :<label><?php echo $place->owner_address_identity ?></label></td>
            @else
                <td colspan="4">  ที่อยู่ตามบัตรประชาชน :<label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($place->owner_address_identity_tel)
                <td colspan="4">โทร : <label><?php echo $place->owner_address_identity_tel ?></label></td>
            @else
                <td colspan="4">โทร : <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($place->owner_current_address)
                <td colspan="4">  ที่พักอาศัยในปัจจุบัน :<label><?php echo $place->owner_current_address ?></label></td>
            @else
                <td colspan="4">  ที่พักอาศัยในปัจจุบัน :<label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($place->owner_current_address_tel)
                <td colspan="4">  โทร : <label><?php echo $place->owner_current_address_tel ?></label></td>
            @else
                <td colspan="4">  โทร : <label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($place->manager_name)
                <td colspan="4">4. ชื่อผู้ดำเนินกิจการ/ผู้ดูแล : <label>{{$place->manager_name}}</label></td>
            @else
                <td colspan="4">4. ชื่อผู้ดำเนินกิจการ/ผู้ดูแล : <label> - </label></td>
            @endif
        </tr>
        <tr>

            @if($place->manager_age)
                <td colspan="4">อายุ : <label><?php echo $place->manager_age ?> </label> ปี</td>
            @else
                <td colspan="4">อายุ : <label> - </label> ปี</td>
            @endif

        </tr>
        <tr>
            @if($place->manager_identity)
                <td colspan="4">  หมายเลขประจำตัวประชาชน :<label><?php echo $place->manager_identity ?></label></td>
            @else
                <td colspan="4">  หมายเลขประจำตัวประชาชน :<label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($place->manager_address_identity)
                <td colspan="4">  ที่อยู่ตามบัตรประชาชน :<label><?php echo $place->manager_address_identity ?></label></td>
            @else
                <td colspan="4">  ที่อยู่ตามบัตรประชาชน :<label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($place->manager_address_identity_tel)
                <td colspan="4">โทร : <label><?php echo $place->manager_address_identity_tel ?></label></td>
            @else
                <td colspan="4">โทร : <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($place->manager_current_address)
                <td colspan="4">  ที่พักอาศัยในปัจจุบัน :<label><?php echo $place->manager_current_address ?></label></td>
            @else
                <td colspan="4">  ที่พักอาศัยในปัจจุบัน :<label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($place->manager_current_address_tel)
                <td colspan="4">  โทร : <label><?php echo $place->manager_current_address_tel ?></label></td>
            @else
                <td colspan="4">  โทร : <label> - </label></td>
            @endif
        </tr>

        <tr rowspan="3">
            @if($place->place_desc)
                <td colspan="4">5.ลักษณะทั่วไปของสถานที่ :<label><?php echo $place->place_desc ?></label></td>
            @else
                <td colspan="4">5.ลักษณะทั่วไปของสถานที่ :<label> - </label></td>
            @endif
        </tr>
        <tr rowspan="3">
            @if($place->place_event)
                <td colspan="4">6.กิจกรรมของสถานที่ :<label><?php echo $place->place_event ?></label></td>
            @else
                <td colspan="4">6.กิจกรรมของสถานที่ :<label> - </label></td>
            @endif
        </tr>
        <tr rowspan="3">
            @if($place->place_note)
                <td colspan="4">7.ข้อมูลสำคัญที่ควรทราบ:<label><?php echo $place->place_note ?></label></td>
            @else
                <td colspan="4">7.ข้อมูลสำคัญที่ควรทราบ :<label> - </label></td>
            @endif
        </tr>


</ol>

    <tr>
        <td colspan="2"></td>

    </tr>
    <tr>
        <td colspan="2"></td>

    </tr>
    <tr>
        <td colspan="2"></td>

    </tr>
    <tr>
        <td colspan="2"></td>

    </tr>
    <tr>
        <td colspan="2"></td>

    </tr>
    <tr>
        <td colspan="2"></td>

    </tr>
    <tr>
        <td colspan="2"></td>

    </tr>
    <tr>
        <td colspan="2"></td>

    </tr>


    <tr>
        <td colspan="3" >ผู้จัดทำ:</td>
        <td colspan="3" align="left">วัน/เดือน/ปี ที่จัดทำ: </td>
    </tr>
    <tr>
        <td colspan="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(............................................................)</td>
    </tr>

    <tr>
        <td colspan="8">ตำแหน่ง: </td>


    </tr>

</table>



</body>




</body>
</html>


