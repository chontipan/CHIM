<!DOCTYPE html>
<html lang="EN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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

<body>

<htmlpageheader name="page-header">
    <table width="100%" style="vertical-align: bottom; font-family: TH SarabunPSK; font-size: 14pt; color: #000000;  "><tr>
            <td align="right" width="20%">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;หน้า {PAGENO}</td>


        </tr></table>
</htmlpageheader>

<htmlpagefooter name="page-footer">
<?php
    $user = Auth::user();
?>

    <table width='100%' style='vertical-align: bottom; font-family: garuda; font-size: 8pt; color: #000000;  font-style: italic;'><tr>

            <td width='100%' style='text-align: right;'>พิมพ์โดย {{$user->name}} พิมพ์เมื่อ {{$place->time}}</td>

        </tr></table>
</htmlpagefooter>

<table align="center" border="0" width="100%">
    <tr>
        <td colspan="4" ><h3 style="text-align: center">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ภาพสถานที่</h3></td>
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
            @if($place->name)
                <td colspan="4">1.ชื่อสถานที่ : <label><?php echo $place->name ?> </label></td>
            @else
                <td colspan="4">1.ชื่อสถานที่ : <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($place->address)
                <td colspan="4">2.ที่ตั้ง: <label><?php echo $place->address ?> </label></td>
            @else
                <td colspan="4">2.ที่ตั้ง : <label> - </label></td>
            @endif

        </tr>
        <tr>
            @if($place->district)
                <td colspan="4">&nbsp;&nbsp;&nbsp;อำเภอ : <label><?php echo $place->district ?> </label></td>

                    @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;อำเภอ : <label> - </label></td>

            @endif

        </tr>
    <tr>
        @if($place->province)

            <td colspan="4">&nbsp;&nbsp;&nbsp;จังหวัด : <label><?php echo $place->province ?> </label></td>

        @else
            <td colspan="4">&nbsp;&nbsp;&nbsp;จังหวัด : <label> - </label></td>
        @endif

    </tr>
    <tr>

        <td>



            <?php if($place->pic_path1 != null) :  ?>
            <img src="{{$public_path}}/{{$place->pic_path1}}" width="600" height="400">
            <?php endif ?>

        </td>

    </tr>
    <tr>
        @if($place->pic1_desc)
            <td align="center">&nbsp;&nbsp;&nbsp;คำอธิบายภาพ : <label><?php echo $place->pic1_desc ?></label></td>
        @endif
    </tr>
    <tr>
        <td>

            <?php if($place->pic_path2 != null) :  ?>
            <img src="{{$public_path}}/{{$place->pic_path2}}" width="600" height="400">
            <?php endif ?>

        </td>
    </tr>
    <tr>
        @if($place->pic2_desc)
            <td align="center">&nbsp;&nbsp;&nbsp;คำอธิบายภาพ : <label><?php echo $place->pic2_desc ?></label></td>
        @endif
    </tr>
    <tr>
        <td>
            <?php if($place->pic_path3 != null) :  ?>
            <img src="{{$public_path}}/{{$place->pic_path3}}" width="600" height="400">
            <?php endif ?>

        </td>
    </tr>
    <tr>
        @if($place->pic3_desc)
            <td align="center">&nbsp;&nbsp;&nbsp;คำอธิบายภาพ : <label><?php echo $place->pic3_desc ?></label></td>
        @endif
    </tr>

</table>



</body>




</body>
</html>


