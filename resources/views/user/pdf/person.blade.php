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

            <td width='100%' style='text-align: right;'>พิมพ์โดย {{$user->name}} พิมพ์เมื่อ {{$person->time}}</td>

        </tr></table>
</htmlpagefooter>

<table align="center" border="0" width="100%">
    <ol>
        <tr>

            <td colspan="4" ><h3 style="text-align: center">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;แบบประวัติบุคคลทั่วไป</h3></td>
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
            @if($person->type_person)
                <td colspan="4">ประเภทบุคคล : <label><?php echo $person->type_person ?> </label></td>
            @else
                <td colspan="4">ประเภทบุคคล : <label> - </label></td>
            @endif

            <td rowspan="4" align="center" style="font-family : sans-serif, Arial;">
                <?php if($person->pic_path != null) :  ?>
                <img src="{{$public_path}}/{{$person->pic_path}}" width="150" height="150">
                <?php else : ?>
                <img src="{{$public_path}}/uploads/images/square-image.png}}" width="150" height="150">
                <?php endif ?>

            </td>

        </tr>
        @if($person->type_identity)
            <tr>
                @if($person->identity)
                    <td colspan="4">{{$person->type_identity}} :
                        <label><?php echo $person->identity ?> </label></td>
                @else
                    <td colspan="4">{{$person->type_identity}} : <label> - </label></td>
                @endif

            </tr>
        @else
            <tr>
                @if($person->identity)
                    <td colspan="4">ไม่ระบุประเภทบัตรประจำตัว :
                        <label><?php echo $person->identity ?> </label></td>
                @else
                    <td colspan="4">ไม่ระบุประเภทบัตรประจำตัว : <label> - </label></td>
                @endif

            </tr>
        @endif
        <tr>
            @if($person->fullname)
                <td colspan="4">1.ชื่อ-ชื่อสกุล : <label>{{$person->fullname}}</label></td>
            @else
                <td colspan="4">1.ชื่อ-ชื่อสกุล : <label> - </label></td>
            @endif
        </tr>
        <tr>

            @if($person->age)
                <td colspan="4">&nbsp;&nbsp;&nbsp;อายุ : <label><?php echo $person->age ?> </label> ปี</td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;อายุ : <label> - </label> ปี</td>
            @endif

        </tr>



        <tr>
            @if($person->job)
                <td colspan="4">2.อาชีพ : <label><?php echo $person->job ?></label></td>
            @else
                <td colspan="4">2.อาชีพ : <label> - </label></td>
            @endif
        </tr>

        <tr>

                <td colspan="4">   3.ชื่อสถานที่ทำงาน-ที่ตั้ง-หมายเลขโทรศัพท์</td>

        </tr>

        <tr>
            @if($person->workplace1)
                <td colspan="4">&nbsp;&nbsp;&nbsp;3.1 <label><?php echo $person->workplace1 ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;3.1 <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($person->workplace1_tel)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โทร : <label><?php echo $person->workplace1_tel ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โทร : <label> - </label></td>
            @endif
        </tr>


        <tr>
            @if($person->workplace2)
                <td colspan="4">&nbsp;&nbsp;&nbsp;3.2 <label><?php echo $person->workplace2 ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;3.2 <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($person->workplace2_tel)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โทร : <label><?php echo $person->workplace2_tel ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โทร : <label> - </label></td>
            @endif
        </tr>


        <tr>
            <td colspan="4">4.ที่อยู่ <label></label></td>
        </tr>

        <tr>
            @if($person->current_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;4.1 ที่อยู่ปัจจุบัน : <label><?php echo $person->current_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;4.1 ที่อยู่ปัจจุบัน : <label> - </label></td>
            @endif
            @if($person->current_address_tel)
                <td colspan="1">โทร : <label><?php echo $person->current_address_tel ?></label></td>
            @else
                <td colspan="1">โทร : <label> - </label></td>
            @endif
        </tr>


        <tr>
            @if($person->origin_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;4.2 ภูมิลำเนาเดิม : <label><?php echo $person->origin_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;4.2 ภูมิลำเนาเดิม : <label> - </label></td>
            @endif
            @if($person->origin_address_tel)
                <td colspan="1">โทร : <label><?php echo $person->origin_address_tel ?></label></td>
            @else
                <td colspan="1">โทร : <label> - </label></td>
            @endif
        </tr>
        
        <tr>
            @if($person->father_name)
                <td colspan="2">5.ชื่อบิดา : <label><?php echo $person->father_name ?> </label></td>
            @else
                <td colspan="2">5.ชื่อบิดา : <label> - </label></td>
            @endif
            @if($person->father_age)
                <td colspan="1">อายุ : <label><?php echo $person->father_age ?></label> ปี</td>
            @else
                <td colspan="1">อายุ : <label> - </label> ปี</td>
            @endif
            @if($person->father_status)
                <td colspan="1"><label><?php echo $person->father_status ?></label></td>
            @else
                <td colspan="1"><label>  </label></td>
            @endif
        </tr>
        <tr>
            @if($person->father_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label><?php echo $person->father_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label> - </label></td>
            @endif
            @if($person->father_address_tel)
                <td colspan="1">โทร : <label><?php echo $person->father_address_tel ?></label></td>
            @else
                <td colspan="1">โทร : <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($person->father_job)
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ : <label><?php echo $person->father_job ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ : <label> - </label></td>
            @endif
            @if($person->father_workplace)
                <td colspan="2">ที่ทำงาน : <label><?php echo $person->father_workplace ?></label></td>
            @else
                <td colspan="2">ที่ทำงาน : <label> - </label></td>
            @endif
            @if($person->father_workplace_tel)
                <td colspan="1">โทร : <label><?php echo $person->father_workplace_tel ?></label></td>
            @else
                <td colspan="1">โทร : <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($person->mother_name)
                <td colspan="2">6.ชื่อมารดา :  <label><?php echo $person->mother_name ?> </label></td>
            @else
                <td colspan="2">6.ชื่อมารดา: <label> - </label></td>
            @endif
            @if($person->mother_age)
                <td colspan="1">อายุ : <label><?php echo $person->mother_age ?></label> ปี</td>
            @else
                <td colspan="1">อายุ: <label> - </label> ปี</td>
            @endif
            @if($person->mother_status)
                <td colspan="1"><label><?php echo $person->mother_status ?></label></td>
            @else
                <td colspan="1"><label>  </label></td>
            @endif

        </tr>
        <tr>
            @if($person->mother_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label><?php echo $person->mother_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label> - </label></td>
            @endif
            @if($person->mother_address_tel)
                <td colspan="1">โทร : <label><?php echo $person->mother_address_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($person->mother_job)
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ : <label><?php echo $person->mother_job ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ: <label> - </label></td>
            @endif
            @if($person->mother_workplace)
                <td colspan="2">ทำงาน : <label><?php echo $person->mother_workplacee ?></label></td>
            @else
                <td colspan="2">ทำงาน: <label> - </label></td>
            @endif
            @if($person->mother_workplace_tel)
                <td colspan="1">โทร :  <label><?php echo $person->mother_workplace_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($person->spouse_name)
                <td colspan="2">7.ชื่อสามี/ภรรยา : <label><?php echo $person->spouse_name ?></label></td>
            @else
                <td colspan="2">7.ชื่อสามี/ภรรยา: <label> - </label></td>
            @endif
            @if($person->spouse_age)
                <td colspan="1">อายุ : <label><?php echo $person->spouse_age ?></label> ปี</td>
            @else
                <td colspan="1">อายุ: <label> - </label> ปี</td>
            @endif
            @if($person->spouse_status)
                <td colspan="1"><label><?php echo $person->spouse_status ?></label></td>
            @else
                <td colspan="1"><label>  </label></td>
            @endif

        </tr>
        <tr>
            @if($person->spouse_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label><?php echo $person->spouse_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;ที่อยู่ : <label> - </label></td>
            @endif
            @if($person->spouse_address_tel)
                <td colspan="1">โทร : <label><?php echo $person->spouse_address_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($person->spouse_job)
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ : <label><?php echo $person->spouse_job ?></label></td>
            @else
                <td colspan="1">&nbsp;&nbsp;&nbsp;อาชีพ: <label> - </label></td>
            @endif
            @if($person->spouse_workplace)
                <td colspan="2">ที่ทำงาน : <label><?php echo $person->spouse_workplace ?></label></td>
            @else
                <td colspan="2">ที่ทำงาน: <label> - </label></td>
            @endif
            @if($person->spouse_workplace_tel)
                <td colspan="1">โทร : <label><?php echo $person->spouse_workplace_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>

        <tr>
            <td colspan="4">8.ชื่อบุตร </td>


        </tr>

            <tr>
                @if($person->child1_name)
                    <td colspan="2">&nbsp;&nbsp;&nbsp;1.<label><?php echo $person->child1_name ?> </label></td>
                @else
                    <td colspan="2">&nbsp;&nbsp;&nbsp;1.<label> - </label></td>
                @endif
                @if($person->child1_age)
                    <td colspan="1">อายุ :<label><?php echo $person->child1_age ?></label> ปี</td>
                @else
                    <td colspan="1">อายุ:<label> - </label> ปี</td>
                @endif
                @if($person->child1_job)
                    <td colspan="1">อาชีพ:<label><?php echo $person->child1_job ?></label></td>
                @else
                    <td colspan="1">อาชีพ:<label> - </label></td>
                @endif
            </tr>

            <tr>
                @if($person->child1_workplace)
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่ทำงาน : <label><?php echo $person->child1_workplace ?></label></td>
                @else
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่ทำงาน: <label> - </label></td>
                @endif
                @if($person->child1_tel)
                    <td colspan="1">โทร : <label><?php echo $person->child1_tel ?></label></td>
                @else
                    <td colspan="1">โทร: <label> - </label></td>
                @endif
            </tr>
            <tr>
                @if($person->child2_name)
                    <td colspan="2">&nbsp;&nbsp;&nbsp;2.<label><?php echo $person->child2_name ?> </label></td>
                @else
                    <td colspan="2">&nbsp;&nbsp;&nbsp;2.<label> - </label></td>
                @endif
                @if($person->child2_age)
                    <td colspan="1">อายุ :<label><?php echo $person->child2_age ?></label> ปี</td>
                @else
                    <td colspan="1">อายุ:<label> - </label> ปี</td>
                @endif
                @if($person->child2_job)
                    <td colspan="1">อาชีพ:<label><?php echo $person->child2_job ?></label></td>
                @else
                    <td colspan="1">อาชีพ:<label> - </label></td>
                @endif
            </tr>

            <tr>
                @if($person->child2_workplace)
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่ทำงาน : <label><?php echo $person->child2_workplace ?></label></td>
                @else
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่ทำงาน: <label> - </label></td>
                @endif
                @if($person->child2_tel)
                    <td colspan="1">โทร : <label><?php echo $person->child2_tel ?></label></td>
                @else
                    <td colspan="1">โทร: <label> - </label></td>
                @endif
            </tr>

        <tr>
            @if($person->child3_name)
                <td colspan="2">&nbsp;&nbsp;&nbsp;3.<label><?php echo $person->child3_name ?> </label></td>
            @else
                <td colspan="2">&nbsp;&nbsp;&nbsp;3.<label> - </label></td>
            @endif
            @if($person->child3_age)
                <td colspan="1">อายุ :<label><?php echo $person->child3_age ?></label> ปี</td>
            @else
                <td colspan="1">อายุ:<label> - </label> ปี</td>
            @endif
            @if($person->child3_job)
                <td colspan="1">อาชีพ:<label><?php echo $person->child3_job ?></label></td>
            @else
                <td colspan="1">อาชีพ:<label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($person->child3_workplace)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่ทำงาน : <label><?php echo $person->child2_workplace ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่ทำงาน: <label> - </label></td>
            @endif
            @if($person->child3_tel)
                <td colspan="1">โทร : <label><?php echo $person->child3_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif
        </tr>




        <tr>
            <td colspan="4">9.ยานพาหนะที่ใช้(ยี่ห้อ รุ่น สี หมายเลขทะเบียน) :

            </td>

        </tr>
        <tr>
            <td colspan="4">
                    <label>&nbsp;&nbsp;&nbsp;
                        <?php if($person->vehicle1 )
                            { ?><?php echo "1. "; echo $person->vehicle1; ?>

                            <?php }
                            else{
                            echo "1. ";
                            ?> - <?php } ?>

                    </label>
            </td>

        </tr>

        <tr>
            <td colspan="4">

                    <label>&nbsp;&nbsp;&nbsp;
                        <?php if($person->vehicle2 )
                        { ?><?php echo "2. "; echo $person->vehicle2; ?>

                        <?php }
                        else{
                        echo "2. ";
                        ?> - <?php } ?>

                    </label>
            </td>

        </tr>



        <tr>
            <td colspan="4">10.บุคคลที่อาศัยอยู่ในครอบครัว  <label></label></td>
        </tr>

            <tr>
                @if($person->family_member1_name)
                    <td colspan="4">&nbsp;&nbsp;&nbsp;1. ชื่อ-สกุล : <label><?php echo $person->family_member1_name ?></label></td>
                @else
                    <td colspan="4">&nbsp;&nbsp;&nbsp;1. ชื่อ-สกุล: <label> - </label></td>
                @endif

                @if($person->family_member1_age)
                    <td colspan="1">อายุ : <label><?php echo $person->family_member1_age ?> ปี</label></td>
                @else
                    <td colspan="1">อายุ: <label> - </label> ปี</td>
                @endif
            </tr>
            <tr>
                @if($person->family_member1_identity)
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน : <label><?php echo $person->family_member1_identity ?></label></td>
                @else
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน: <label> - </label></td>
                @endif
                    @if($person->family_member1_job)
                        <td colspan="1">อาชีพ : <label><?php echo $person->family_member1_job ?></label></td>
                    @else
                        <td colspan="1">อาชีพ: <label> - </label></td>
                    @endif
            </tr>

            <tr>
                @if($person->family_member1_workplace)
                    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานที่ทำงาน : <label><?php echo $person->family_member1_workplace ?></label></td>
                @else
                    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานที่ทำงาน: <label> - </label></td>
                @endif
                @if($person->family_member1_workplace_tel)
                    <td colspan="1">โทร : <label><?php echo $person->family_member1_workplace_tel ?></label></td>
                @else
                    <td colspan="1">โทร: <label> - </label></td>
                @endif

            </tr>
            <tr>
                @if($person->family_member1_address)
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม : <label><?php echo $person->family_member1_address ?></label></td>
                @else
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม: <label> - </label></td>
                @endif

            </tr>
        <tr>
            @if($person->family_member2_name)
                <td colspan="4">&nbsp;&nbsp;&nbsp;2. ชื่อ-สกุล : <label><?php echo $person->family_member2_name ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;2. ชื่อ-สกุล: <label> - </label></td>
            @endif

            @if($person->family_member2_age)
                <td colspan="1">อายุ : <label><?php echo $person->family_member2_age ?> ปี</label></td>
            @else
                <td colspan="1">อายุ: <label> - </label> ปี</td>
            @endif
        </tr>
        <tr>
            @if($person->family_member2_identity)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน : <label><?php echo $person->family_member2_identity ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน: <label> - </label></td>
            @endif
            @if($person->family_member2_job)
                <td colspan="1">อาชีพ : <label><?php echo $person->family_member2_job ?></label></td>
            @else
                <td colspan="1">อาชีพ: <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($person->family_member2_workplace)
                <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานที่ทำงาน : <label><?php echo $person->family_member2_workplace ?></label></td>
            @else
                <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานที่ทำงาน: <label> - </label></td>
            @endif
            @if($person->family_member2_workplace_tel)
                <td colspan="1">โทร : <label><?php echo $person->family_member2_workplace_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif

        </tr>
        <tr>
            @if($person->family_member2_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม : <label><?php echo $person->family_member2_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม: <label> - </label></td>
            @endif

        </tr>
        <tr>
            @if($person->family_member3_name)
                <td colspan="4">&nbsp;&nbsp;&nbsp;3. ชื่อ-สกุล : <label><?php echo $person->family_member3_name ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;3. ชื่อ-สกุล: <label> - </label></td>
            @endif

            @if($person->family_member3_age)
                <td colspan="1">อายุ : <label><?php echo $person->family_member3_age ?> ปี</label></td>
            @else
                <td colspan="1">อายุ: <label> - </label> ปี</td>
            @endif
        </tr>
        <tr>
            @if($person->family_member3_identity)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน : <label><?php echo $person->family_member3_identity ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน: <label> - </label></td>
            @endif
            @if($person->family_member3_job)
                <td colspan="1">อาชีพ : <label><?php echo $person->family_member1_job ?></label></td>
            @else
                <td colspan="1">อาชีพ: <label> - </label></td>
            @endif
        </tr>

        <tr>
            @if($person->family_member3_workplace)
                <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานที่ทำงาน : <label><?php echo $person->family_member3_workplace ?></label></td>
            @else
                <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานที่ทำงาน: <label> - </label></td>
            @endif
            @if($person->family_member3_workplace_tel)
                <td colspan="1">โทร : <label><?php echo $person->family_member3_workplace_tel ?></label></td>
            @else
                <td colspan="1">โทร: <label> - </label></td>
            @endif

        </tr>
        <tr>
            @if($person->family_member3_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม : <label><?php echo $person->family_member3_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม: <label> - </label></td>
            @endif

        </tr>


        <tr>

            <td colspan="4">11.คนรับใช้ / ลูกจ้าง  <label></label></td>
        </tr>
       
            <tr>
                @if($person->employee1_name)
                    <td colspan="4">&nbsp;&nbsp;&nbsp;1.ชื่อ-สกุล : <label><?php echo $person->employee1_name ?>  </label></td>
                @else
                    <td colspan="4">&nbsp;&nbsp;&nbsp;1.ชื่อ-สกุล: <label> - </label></td>
                @endif
                @if($person->employee1_age)
                    <td colspan="1">อายุ : <label><?php echo $person->employee1_age ?></label>  ปี</td>
                @else
                    <td colspan="1">อายุ: <label> - </label> ปี</td>
                @endif
            </tr>
            <tr>
                @if($person->employee1_identity)
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน : <label><?php echo $person->employee1_identity ?></label></td>
                @else
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน: <label> - </label></td>
                @endif
            </tr>
            <tr>
                @if($person->employee1_address)
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม : <label><?php echo $person->employee1_address ?></label></td>
                @else
                    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม : <label> - </label></td>
                @endif

            </tr>
        <tr>
            @if($person->employee2_name)
                <td colspan="4">&nbsp;&nbsp;&nbsp;2.ชื่อ-สกุล : <label><?php echo $person->employee2_name ?>  </label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;2.ชื่อ-สกุล: <label> - </label></td>
            @endif
            @if($person->employee2_age)
                <td colspan="1">อายุ : <label><?php echo $person->employee2_age ?></label>  ปี</td>
            @else
                <td colspan="1">อายุ: <label> - </label> ปี</td>
            @endif
        </tr>
        <tr>
            @if($person->employee2_identity)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน : <label><?php echo $person->employee2_identity ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขประจำตัวประชาชน: <label> - </label></td>
            @endif
        </tr>
        <tr>
            @if($person->employee2_address)
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม : <label><?php echo $person->employee2_address ?></label></td>
            @else
                <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม : <label> - </label></td>
            @endif

        </tr>

        <tr>
            @if($person->others)
                <td colspan="4">12.อื่นๆที่น่าสนใจ : <label><?php echo $person->others ?></label></td>
            @else
                <td colspan="4">12.อื่นๆที่น่าสนใจ : <label> - </label></td>
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


