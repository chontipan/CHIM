<!DOCTYPE html>
<html lang="EN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$person->fullname}}_export_{{$person->time}}</title>
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


</htmlpageheader>

<htmlpagefooter name="page-footer">
    <?php
    $user = Auth::user();

    ?>

    <table width='100%' style='vertical-align: bottom; font-family: garuda; font-size: 8pt; color: #000000;  font-style: italic;'><tr>

            <td width='100%' style='text-align: right;'>พิมพ์โดย {{$user->name}} พิมพ์เมื่อ {{$person->time}}</td>

        </tr></table>
</htmlpagefooter>

<div class="row">
    <h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;รูปถ่ายบุคคลทั่วไป</h3>

</div>
<div class="row" >
                <?php if($person->pic_path != null) :  ?>
                <img src="{{$public_path}}/{{$person->pic_path}}" width="600" height="400">
                <?php else : ?>
                <img src="{{$public_path}}/uploads/images/square-image.png}}" width="600" height="400">
                <?php endif ?>

</div>

<div class="row">

    @if($person->type_identity)

        @if($person->identity)

            <label>{{$person->type_identity}} : {{$person->identity}} </label>
        @else
            {{$person->type_identity}} : <label> - </label>
        @endif


    @else

        @if($person->identity)
            ไม่ระบุประเภทบัตรประจำตัว :
            <label><?php echo $person->identity ?> </label>
        @else
            ไม่ระบุประเภทบัตรประจำตัว : <label> - </label>
        @endif


    @endif


</div>
<div class="row">

        @if($person->fullname)
            ชื่อ-ชื่อสกุล : <label>{{$person->fullname}}</label>
        @else
            ชื่อ-ชื่อสกุล : <label> - </label>
        @endif

</div>
<div class="row">

    @if($person->age)
        อายุ : <label><?php echo $person->age ?> </label> ปี
    @else
        อายุ : <label> - </label> ปี
    @endif

</div>
<div class="row">   <label>ที่อยู่ : <?php echo $person->current_address ?> </label></div>



</body>




</body>
</html>


