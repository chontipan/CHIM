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
    <table width="100%" style="vertical-align: bottom; font-family: TH SarabunPSK; font-size: 14pt; color: #000000;  "><tr>
            <td width="20%"></td>
            <td width="30%" style="text-align: right; ">หน้า {PAGENO}</td>
            <td width="55%" style="text-align: right; "> ลำดับที่</td>
        </tr></table>

</htmlpageheader>

<htmlpagefooter name="page-footer">
<?php
    $user = Auth::user();

?>

    <table width='100%' style='vertical-align: bottom; font-family: garuda; font-size: 8pt; color: #000000;  font-style: italic;'><tr>

            <td width='100%' style='text-align: right;'>พิมพ์โดย {{$user->name}} พิมพ์เมื่อ {{$criminal->time}}</td>

        </tr></table>
</htmlpagefooter>

<table align="center" border="0" width="100%">
    <ol>
        <tr>

            <td colspan="4" ><h3>&emsp;&emsp;&emsp;แบบประวัติบุคคลที่เกี่ยวข้องกับอาชญากรรม</h3></td>

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
            <td colspan="2"></td>

        </tr>
        <tr>
            @if($criminal->type_person)
                <td colspan="4">ประเภทบุคคล : <label><?php echo $criminal->type_person ?> </label></td>
            @else
                <td colspan="4">ประเภทบุคคล : <label> - </label></td>
            @endif

            <td rowspan="4" align="center" style="font-family : sans-serif, Arial;">
                <?php if($criminal->pic_path != null) :  ?>
                <img src="{{$public_path}}/{{$criminal->pic_path}}" width="150" height="150">
                <?php else : ?>
                <img src="{{$public_path}}/uploads/images/square-image.png}}" width="150" height="150">
                <?php endif ?>

            </td>

        </tr>
        @if($criminal->type_identity)
            <tr>
                @if($criminal->identity)
                    <td colspan="4">{{$criminal->type_identity}} :
                        <label><?php echo $criminal->identity ?> </label></td>
                @else
                    <td colspan="4">{{$criminal->type_identity}} : <label> - </label></td>
                @endif

            </tr>
        @else
            <tr>
                @if($criminal->identity)
                    <td colspan="4">ไม่ระบุประเภทบัตรประจำตัว :
                        <label><?php echo $criminal->identity ?> </label></td>
                @else
                    <td colspan="4">ไม่ระบุประเภทบัตรประจำตัว : <label> - </label></td>
                @endif

            </tr>
        @endif

        <tr>
            @if($criminal->fullname)
                <td colspan="4">1.ชื่อ-ชื่อสกุล : <label>{{$criminal->fullname}}</label></td>
            @else
                <td colspan="4">1.ชื่อ-ชื่อสกุล : <label> - </label></td>
            @endif
        </tr>
        <tr>

            @if($criminal->age)
                <td colspan="4">2.อายุ : <label><?php echo $criminal->age ?> </label> ปี</td>
            @else
                <td colspan="4">2.อายุ : <label> - </label> ปี</td>
            @endif

        </tr>
        <tr>

            @if($criminal->nationality)
                <td colspan="4">&nbsp;&nbsp;&nbsp;สัญชาติ : <label><?php echo $criminal->nationality ?> </label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;สัญชาติ : <label> - </label></td>
            @endif

        </tr>

        <tr>

            @if($criminal->nickname1)
                <td colspan="4">&nbsp;&nbsp;&nbsp;1.1 นามแฝง : <label><?php echo $criminal->nickname1 ?> </label> ปี</td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;1.1 นามแฝง : <label> - </label></td>
            @endif

        </tr>

        <tr>

            @if($criminal->nickname2)
                <td colspan="4">&nbsp;&nbsp;&nbsp;1.2 นามแฝง : <label><?php echo $criminal->nickname2 ?> </label> ปี</td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;1.2 นามแฝง : <label> - </label></td>
            @endif

        </tr>




        <tr>
            @if($criminal->current_address)
                <td colspan="4">3.ที่อยู่ปัจจุบัน : <label><?php echo $criminal->current_address ?></label></td>
            @else
                <td colspan="4">3.ที่อยู่ปัจจุบัน : <label> - </label></td>
            @endif
            @if($criminal->current_address_tel)
                <td colspan="1">โทร : <label><?php echo $criminal->current_address_tel ?></label></td>
            @else
                <td colspan="1">โทร : <label> - </label></td>
            @endif
        </tr>


        <tr>
            @if($criminal->origin_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;ภูมิลำเนาเดิม : <label><?php echo $criminal->origin_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;ภูมิลำเนาเดิม : <label> - </label></td>
            @endif
            @if($criminal->origin_address_tel)
                <td colspan="1">โทร : <label><?php echo $criminal->origin_address_tel ?></label></td>
            @else
                <td colspan="1">โทร : <label> - </label></td>
            @endif
        </tr>



        <tr>
            @if($criminal->job)
                <td colspan="2">4.อาชีพ : <label><?php echo $criminal->job ?></label></td>
            @else
                <td colspan="2">4.อาชีพ : <label> - </label></td>
            @endif

                @if($criminal->workplace_name)
                    <td colspan="4">สถานที่ทำงาน : <label><?php echo $criminal->workplace_name ?></label></td>
                @else
                    <td colspan="4">สถานที่ทำงาน : <label> - </label></td>
                @endif
        </tr>

        <tr>
            @if($criminal->workplace_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;ตั้งอยู่ที่ : <label><?php echo $criminal->workplace_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;ตั้งอยู่ที่ : <label> - </label></td>
            @endif


        </tr>

        <tr>

            @if($criminal->workplace_address_tel)
                <td colspan="4">&nbsp;&nbsp;&nbsp;โทร : <label><?php echo $criminal->workplace_address_tel ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;โทร : <label> - </label></td>
            @endif

        </tr>

        <tr>

            @if($criminal->education)
                <td colspan="4">5.การศึกษา : <label><?php echo $criminal->education ?></label></td>
            @else
                <td colspan="4">5.การศึกษา : <label> - </label></td>
            @endif

        </tr>




        
        <tr>
            @if($criminal->father_name)
                <td colspan="2">6.ชื่อบิดา : <label><?php echo $criminal->father_name ?> </label></td>
            @else
                <td colspan="2">6.ชื่อบิดา : <label> - </label></td>
            @endif
            @if($criminal->father_age)
                <td colspan="1">อายุ : <label><?php echo $criminal->father_age ?></label> ปี</td>
            @else
                <td colspan="1">อายุ : <label> - </label> ปี</td>
            @endif
            @if($criminal->father_status)
                <td colspan="1"><label><?php echo $criminal->father_status ?></label></td>
            @else
                <td colspan="1"><label>  </label></td>
            @endif
        </tr>
        <tr>
            @if($criminal->father_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label><?php echo $criminal->father_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label> - </label></td>
            @endif
            @if($criminal->father_address_tel)
                <td colspan="1">โทร : <label><?php echo $criminal->father_address_tel ?></label></td>
            @else
                <td colspan="1">โทร : <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($criminal->father_job)
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ : <label><?php echo $criminal->father_job ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ : <label> - </label></td>
            @endif
            @if($criminal->father_workplace)
                <td colspan="2">ที่ทำงาน : <label><?php echo $criminal->father_workplace ?></label></td>
            @else
                <td colspan="2">ที่ทำงาน : <label> - </label></td>
            @endif
            @if($criminal->father_workplace_tel)
                <td colspan="1">โทร : <label><?php echo $criminal->father_workplace_tel ?></label></td>
            @else
                <td colspan="1">โทร : <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($criminal->mother_name)
                <td colspan="2">7.ชื่อมารดา :  <label><?php echo $criminal->mother_name ?> </label></td>
            @else
                <td colspan="2">7.ชื่อมารดา: <label> - </label></td>
            @endif
            @if($criminal->mother_age)
                <td colspan="1">อายุ : <label><?php echo $criminal->mother_age ?></label> ปี</td>
            @else
                <td colspan="1">อายุ: <label> - </label> ปี</td>
            @endif
            @if($criminal->mother_status)
                <td colspan="1"><label><?php echo $criminal->mother_status ?></label></td>
            @else
                <td colspan="1"><label>  </label></td>
            @endif

        </tr>
        <tr>
            @if($criminal->mother_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label><?php echo $criminal->mother_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label> - </label></td>
            @endif
            @if($criminal->mother_address_tel)
                <td colspan="1">โทร : <label><?php echo $criminal->mother_address_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($criminal->mother_job)
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ : <label><?php echo $criminal->mother_job ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ: <label> - </label></td>
            @endif
            @if($criminal->mother_workplace)
                <td colspan="2">ทำงาน : <label><?php echo $criminal->mother_workplacee ?></label></td>
            @else
                <td colspan="2">ทำงาน: <label> - </label></td>
            @endif
            @if($criminal->mother_workplace_tel)
                <td colspan="1">โทร :  <label><?php echo $criminal->mother_workplace_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($criminal->spouse_name)
                <td colspan="2">8.ชื่อสามี/ภรรยา : <label><?php echo $criminal->spouse_name ?></label></td>
            @else
                <td colspan="2">8.ชื่อสามี/ภรรยา: <label> - </label></td>
            @endif
            @if($criminal->spouse_age)
                <td colspan="1">อายุ : <label><?php echo $criminal->spouse_age ?></label> ปี</td>
            @else
                <td colspan="1">อายุ: <label> - </label> ปี</td>
            @endif
            @if($criminal->spouse_status)
                <td colspan="1"><label><?php echo $criminal->spouse_status ?></label></td>
            @else
                <td colspan="1"><label>  </label></td>
            @endif

        </tr>
        <tr>
            @if($criminal->spouse_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label><?php echo $criminal->spouse_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label> - </label></td>
            @endif
            @if($criminal->spouse_address_tel)
                <td colspan="1">โทร : <label><?php echo $criminal->spouse_address_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($criminal->spouse_job)
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ : <label><?php echo $criminal->spouse_job ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ: <label> - </label></td>
            @endif
            @if($criminal->spouse_workplace)
                <td colspan="2">ที่ทำงาน : <label><?php echo $criminal->spouse_workplace ?></label></td>
            @else
                <td colspan="2">ที่ทำงาน: <label> - </label></td>
            @endif
            @if($criminal->spouse_workplace_tel)
                <td colspan="1">โทร : <label><?php echo $criminal->spouse_workplace_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>


        <tr>
            @if($criminal->child_name)
                <td colspan="2">9.ชื่อบุตร : <label><?php echo $criminal->child_name ?></label></td>
            @else
                <td colspan="2">9.ชื่อบุตร : <label> - </label></td>
            @endif
            @if($criminal->child_age)
                <td colspan="1">อายุ : <label><?php echo $criminal->child_age ?></label> ปี</td>
            @else
                <td colspan="1">อายุ: <label> - </label> ปี</td>
            @endif
            @if($criminal->child_status)
                <td colspan="1"><label><?php echo $criminal->child_status ?></label></td>
            @else
                <td colspan="1"><label>  </label></td>
            @endif

        </tr>
        <tr>
            @if($criminal->child_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label><?php echo $criminal->child_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label> - </label></td>
            @endif
            @if($criminal->child_address_tel)
                <td colspan="1">โทร : <label><?php echo $criminal->child_address_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($criminal->child_job)
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ : <label><?php echo $criminal->child_job ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ: <label> - </label></td>
            @endif
            @if($criminal->child_workplace)
                <td colspan="2">ที่ทำงาน : <label><?php echo $criminal->child_workplace ?></label></td>
            @else
                <td colspan="2">ที่ทำงาน: <label> - </label></td>
            @endif
            @if($criminal->child_workplace_tel)
                <td colspan="1">โทร : <label><?php echo $criminal->child_workplace_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($criminal->height)
                <td colspan="1">10.ตำหนิรูปพรรณ สูงประมาณ: <label><?php echo $criminal->height ?></label><label> ซม. </label></td>
            @else
                <td colspan="1">10.ตำหนิรูปพรรณ สูงประมาณ: <label> - </label> <label> ซม. </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->shape)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-รูปร่าง: <label><?php echo $criminal->shape ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-รูปร่าง: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->tooth)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ฟัน: <label><?php echo $criminal->tooth ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ฟัน: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->skin)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ผิว: <label><?php echo $criminal->skin ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ผิว: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->hair)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ทรงผม: <label><?php echo $criminal->hair ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ทรงผม: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->head)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ศรีษะ: <label><?php echo $criminal->head ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ศรีษะ: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->face)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ใบหน้า: <label><?php echo $criminal->face ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ใบหน้า: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->eyebrow)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-คิ้ว: <label><?php echo $criminal->eyebrow ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-คิ้ว: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->eye)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ตา: <label><?php echo $criminal->eye ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ตา: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->ear)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-หู: <label><?php echo $criminal->ear ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-หู: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->nose)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-จมูก: <label><?php echo $criminal->nose ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-จมูก: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->mouse)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ปาก: <label><?php echo $criminal->mouse ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ปาก: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->chin)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-คาง: <label><?php echo $criminal->chin ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-คาง: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->beard)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-หนวด,เครา: <label><?php echo $criminal->beard ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-หนวด,เครา: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->scar)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-แผลเป็นหรือตำหนิพิการที่ติดตัวมาแต่กำเนิด: <label><?php echo $criminal->scar ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-แผลเป็นหรือตำหนิพิการที่ติดตัวมาแต่กำเนิด: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->pronunciation)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-สำเนียง: <label><?php echo $criminal->pronunciation ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-สำเนียง: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->noteable)
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ลักษณะเด่นที่สังเกตเห็นได้ง่าย: <label><?php echo $criminal->noteable ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ลักษณะเด่นที่สังเกตเห็นได้ง่าย: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->behavior)
                <td colspan="1">11.อุปนิสัย: <label><?php echo $criminal->behavior ?></label></td>
            @else
                <td colspan="1">11.อุปนิสัย: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->favor_place)
                <td colspan="1">12.สถานที่ชอบไปเที่ยวเตร่: <label><?php echo $criminal->favor_place ?></label></td>
            @else
                <td colspan="1">12.สถานที่ชอบไปเที่ยวเตร่: <label> - </label></td>
            @endif

        </tr>


        <tr>
            @if($criminal->previous_crime)
                <td colspan="1">13.ประวัติการกระทำความผิด: <label><?php echo $criminal->previous_crime ?></label></td>
            @else
                <td colspan="1">13.ประวัติการกระทำความผิด: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->weapon)
                <td colspan="1">14.อาวุธที่ใช้ในการกระทำความผิด: <label><?php echo $criminal->weapon ?></label></td>
            @else
                <td colspan="1">14.อาวุธที่ใช้ในการกระทำความผิด: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->vehicle)
                <td colspan="1">15.ยานพาหนะที่ใช้: <label><?php echo $criminal->vehicle ?></label></td>
            @else
                <td colspan="1">15.ยานพาหนะที่ใช้: <label> - </label></td>
            @endif

        </tr>

        <tr >
            @if($criminal->crime_related)
                <td colspan="1">16.ผู้ร่วมกระทำความผิด: <label><?php echo $criminal->crime_related ?></label></td>
            @else
                <td colspan="1">16.ผู้ร่วมกระทำความผิด: <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($criminal->crime_desc)
                <td colspan="1">17.รายละเอียดหรือวิธีการกระทำความผิด: <label><?php echo $criminal->crime_desc ?></label></td>
            @else
                <td colspan="1">17.รายละเอียดหรือวิธีการกระทำความผิด: <label> - </label></td>
            @endif

        </tr>

        <tr >
            @if($criminal->others)
                <td colspan="1" >18.พฤติการณ์อื่นๆที่น่าสนใจ: <label><?php echo $criminal->others ?></label></td>
            @else
                <td colspan="1">18.พฤติการณ์อื่นๆที่น่าสนใจ: <label> - </label></td>
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
        <td colspan="8" >ผู้จัดทำ: .................................................. วัน/เดือน/ปี ที่จัดทำ: ..................................
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
        <td colspan="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(..................................................)</td>
    </tr>
    <tr>
        <td colspan="2"></td>

    </tr>
    <tr>
        <td colspan="2"></td>

    </tr>
    <tr>
        <td colspan="8">ตำแหน่ง: ................................................ </td>


    </tr>

</table>



</body>




</body>
</html>


