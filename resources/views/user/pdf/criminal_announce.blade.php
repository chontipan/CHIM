<!DOCTYPE html>
<html lang="EN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$criminal->fullname}}_export_{{$criminal->time}}</title>
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

            <td width='100%' style='text-align: right;'>พิมพ์โดย {{$user->name}} พิมพ์เมื่อ {{$criminal->time}}</td>

        </tr></table>
</htmlpagefooter>

<div class="row">
    <h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;รูปถ่ายบุคคลที่เกี่ยวข้องกับอาชญากรรม</h3>

</div>
<div class="row" >
                <?php if($criminal->pic_path != null) :  ?>
                <img src="{{$public_path}}/{{$criminal->pic_path}}" width="600" height="400">
                <?php else : ?>
                <img src="{{$public_path}}/uploads/images/square-image.png}}" width="600" height="400">
                <?php endif ?>

</div>

<div class="row">

        @if($criminal->type_identity)

            @if($criminal->identity)

            <label>{{$criminal->type_identity}} : {{$criminal->identity}} </label>
            @else
                {{$criminal->type_identity}} : <label> - </label>
            @endif


        @else

            @if($criminal->identity)
               ไม่ระบุประเภทบัตรประจำตัว :
                    <label><?php echo $criminal->identity ?> </label>
            @else
               ไม่ระบุประเภทบัตรประจำตัว : <label> - </label>
            @endif


        @endif


</div>
<div class="row">

        @if($criminal->fullname)
            ชื่อ-ชื่อสกุล : <label>{{$criminal->fullname}}</label>
        @else
            ชื่อ-ชื่อสกุล : <label> - </label>
        @endif

</div>
<div class="row">

    @if($criminal->age)
        อายุ : <label><?php echo $criminal->age ?> </label> ปี
    @else
        อายุ : <label> - </label> ปี
    @endif

</div>

<div class="row">

    @if($criminal->nationality)
        สัญชาติ : <label><?php echo $criminal->nationality ?> </label>
    @else
        สัญชาติ : <label> - </label>
    @endif

</div>

<div class="row">
    <label>ที่อยู่ : <?php echo $criminal->current_address ?> </label></div>

</body>
<div class="row">
    <label>รายละเอียดหรือวิธีการกระทำความผิด : <?php echo $criminal->crime_desc ?> </label></div>

</body>



</body>
</html>


