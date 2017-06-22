@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                แบบประวัติบุคคลทั่วไป
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" action="/person/create" enctype="multipart/form-data">

                                {{csrf_field()}}

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ประเภทบุคคล</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                               name="person[type_person]"
                                               value=""
                                               class="form-control" placeholder="ประเภทบุคคล">
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">1.ชื่อ-ชื่อสกุล</label>
                                            <div class="col-sm-10">
                                                <input required type="text"
                                                       name="person[fullname]"
                                                       value=""
                                                       class="form-control" placeholder="ชื่อ-ชื่อสกุล">
                                            </div>
                                        </div>
                                </div>
                                <div class="row">

                                        <div class="form-group">
                                            <label style="text-align: left" class="col-sm-2 control-label">
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                อายุ</label>
                                            <div class="col-sm-8">
                                                <input  type="text"
                                                       name="person[age]"
                                                       value=""
                                                       class="form-control" placeholder="อายุ">
                                            </div>
                                            <label style="text-align: left" class="col-sm-2 control-label">ปี</label>
                                        </div>

                                </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-3 control-label">
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                        ประเภทบัตร</label>
                                    <div class="col-sm-9">

                                            <select class="form-control" name="person[type_identity]">
                                                <option value="">กรุณาเลือกบัตร</option>
                                                <option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
                                                <option value="หนังสือเดินทาง">หนังสือเดินทาง</option>
                                            </select>


                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-3 control-label">
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                        หมายเลขบัตร</label>
                                    <div class="col-sm-9">
                                        <input  type="text"
                                               name="person[identity]"
                                               value=""
                                               class="form-control" placeholder="หมายเลขบัตร">
                                    </div>
                                </div>

                            </div>

                                <div class="row">

                                        <div class="form-group">
                                            <label style="text-align: left" class="col-sm-2 control-label">
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
                                                2.อาชีพ</label>
                                            <div class="col-sm-10">
                                                <input  type="text"
                                                       name="person[job]"
                                                       value=""
                                                       class="form-control" placeholder="อาชีพ">
                                            </div>
                                        </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label style="text-align: left" class="col-md-4 control-label">
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                                3.ชื่อสถานที่ทำงาน-ที่ตั้ง-หมายเลขโทรศัพท์</label>
                                        </div>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            3.1
                                        </label>
                                        <div class="col-md-10">
                                            <input  type="text"
                                                   name="person[workplace1]"
                                                   value=""
                                                   class="form-control" placeholder="ชื่อสถานที่ทำงาน ที่ตั้ง">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            โทร
                                        </label>
                                        <div class="col-md-10">
                                            <input  type="text"
                                                   name="person[workplace1_tel]"
                                                   value=""
                                                   class="form-control" placeholder="เบอร์โทรสถานที่ทำงาน">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            3.2
                                        </label>
                                        <div class="col-md-10">
                                            <input  type="text"
                                                   name="person[workplace2]"
                                                   value=""
                                                   class="form-control" placeholder="ชื่อสถานที่ทำงาน ที่ตั้ง">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            โทร
                                        </label>
                                        <div class="col-md-10">
                                            <input  type="text"
                                                   name="person[workplace2_tel]"
                                                   value=""
                                                   class="form-control" placeholder="เบอร์โทรสถานที่ทำงาน">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            4.ที่อยู่</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            4.1&nbsp;ปัจจุบัน
                                        </label>
                                        <div class="col-md-10">
                                            <input  type="text"
                                                   name="person[current_address]"
                                                   value=""
                                                   class="form-control" placeholder="ที่อยู่ปัจจุบัน">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            โทร
                                        </label>
                                        <div class="col-md-10">
                                            <input  type="text"
                                                   name="person[current_address_tel]"
                                                   value=""
                                                   class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            4.2&nbsp;ภูมิลำเนาเดิม
                                        </label>
                                        <div style="padding-left: 0em" class="col-md-9">
                                            <input  type="text"
                                                   name="person[origin_address]"
                                                   value=""
                                                   class="form-control" placeholder="ภูมิลำเนาเดิม">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            โทร
                                        </label>
                                        <div class="col-md-10">
                                            <input  type="text"
                                                   name="person[origin_address_tel]"
                                                   value=""
                                                   class="form-control" placeholder="เบอร์โทร">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            5.ชื่อบิดา</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                   name="person[father_name]"
                                                   value=""
                                                   class="form-control" placeholder="ชื่อบิดา">
                                        </div>
                                        <label class="col-md-2 control-label">อายุ</label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                   name="person[father_age]"
                                                   value=""
                                                   class="form-control" placeholder="อายุ">
                                        </div>
                                        <label style="text-align: left" class="col-md-1 control-label">ปี</label>


                                        <div class="form-group">
                                            <div class="col-md-2">

                                                <select class="form-control" name="person[father_status]">
                                                    <option value="">เลือกสถานะ</option>
                                                    <option value="มีชีวิต">มีชีวิต</option>
                                                    <option value="เสียชีวิต">เสียชีวิต</option>
                                                </select>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                   name="person[father_address]"
                                                   value=""
                                                   class="form-control" placeholder="ที่อยู่">
                                        </div>
                                        <label class="col-md-2 control-label">โทร</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[father_address_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            6.ชื่อมารดา</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[mother_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อมารดา">
                                        </div>
                                        <label class="col-md-2 control-label">อายุ</label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[mother_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label style="text-align: left" class="col-md-1 control-label">ปี</label>


                                        <div class="form-group">
                                            <div class="col-md-2">

                                                <select class="form-control" name="person[mother_status]">
                                                    <option value="">เลือกสถานะ</option>
                                                    <option value="มีชีวิต">มีชีวิต</option>
                                                    <option value="เสียชีวิต">เสียชีวิต</option>
                                                </select>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[mother_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่">
                                        </div>
                                        <label class="col-md-2 control-label">โทร</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[mother_address_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            7.ชื่อสามี/ภรรยา</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[spouse_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อสามี/ภรรยา">
                                        </div>
                                        <label class="col-md-2 control-label">อายุ</label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[spouse_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label style="text-align: left" class="col-md-1 control-label">ปี</label>


                                        <div class="form-group">
                                            <div class="col-md-2">

                                                <select class="form-control" name="person[spouse_status]">
                                                    <option value="">เลือกสถานะ</option>
                                                    <option value="มีชีวิต">มีชีวิต</option>
                                                    <option value="เสียชีวิต">เสียชีวิต</option>
                                                </select>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[spouse_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่">
                                        </div>
                                        <label class="col-md-2 control-label">โทร</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[spouse_address_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            8.ชื่อบุตร</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            1.
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[child1_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อบุตร">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            อายุ
                                        </label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[child1_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label class="col-md-1 control-label">
                                           ปี
                                        </label>
                                        <label class="col-md-1 control-label">
                                            อาชีพ
                                        </label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="person[child1_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-3 control-label">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่ทำงาน</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[child1_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="ที่ทำงาน">
                                        </div>
                                        <label class="col-md-2 control-label">โทร</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[child1_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            2.
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[child2_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อบุตร">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            อายุ
                                        </label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[child2_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            ปี
                                        </label>
                                        <label class="col-md-1 control-label">
                                            อาชีพ
                                        </label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="person[child2_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-3 control-label">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่ทำงาน</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[child2_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="ที่ทำงาน">
                                        </div>
                                        <label class="col-md-2 control-label">โทร</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[child2_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            3.
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[child3_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อบุตร">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            อายุ
                                        </label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[child3_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            ปี
                                        </label>
                                        <label class="col-md-1 control-label">
                                            อาชีพ
                                        </label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="person[child3_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-3 control-label">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่ทำงาน</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[child3_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="ที่ทำงาน">
                                        </div>
                                        <label class="col-md-2 control-label">โทร</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[child3_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            9.ยานพาหนะที่ใช้ (ยี่ห้อ รุ่น สี หมายเลขทะเบียน)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            1.
                                        </label>
                                        <div class="col-md-10">
                                            <input  type="text"
                                                    name="person[vehicle1]"
                                                    value=""
                                                    class="form-control" placeholder="ยานพาหนะที่ใช้ (ยี่ห้อ รุ่น สี หมายเลขทะเบียน)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            2.
                                        </label>
                                        <div class="col-md-10">
                                            <input  type="text"
                                                    name="person[vehicle2]"
                                                    value=""
                                                    class="form-control" placeholder="ยานพาหนะที่ใช้ (ยี่ห้อ รุ่น สี หมายเลขทะเบียน)">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            10.บุคคลที่อยู่ร่วมในครอบครัว</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            1.&nbsp;ชื่อ ชื่อสกุล
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[family_member1_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อ ชื่อสกุล">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            อายุ
                                        </label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[family_member1_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            ปี
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            &nbsp;&nbsp;หมายเลขประจำตัวประชาชน
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[family_member1_identity]"
                                                    value=""
                                                    class="form-control" placeholder="หมายเลขประจำตัวประชาชน">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            อาชีพ
                                        </label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[family_member1_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;สถานที่ทำงาน
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[family_member1_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="สถานที่ทำงาน">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            โทร
                                        </label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[family_member1_workplace_tel]"
                                                    value=""
                                                    class="form-control" placeholder="โทร">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม
                                        </label>
                                        <div class="col-md-9">
                                            <input  type="text"
                                                    name="person[family_member1_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่ตามภูมิลำเนาเดิม">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            2.&nbsp;ชื่อ ชื่อสกุล
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[family_member2_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อ ชื่อสกุล">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            อายุ
                                        </label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[family_member2_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            ปี
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            &nbsp;&nbsp;หมายเลขประจำตัวประชาชน
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[family_member2_identity]"
                                                    value=""
                                                    class="form-control" placeholder="หมายเลขประจำตัวประชาชน">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            อาชีพ
                                        </label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[family_member2_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;สถานที่ทำงาน
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[family_member2_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="สถานที่ทำงาน">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            โทร
                                        </label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[family_member2_workplace_tel]"
                                                    value=""
                                                    class="form-control" placeholder="โทร">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม
                                        </label>
                                        <div class="col-md-9">
                                            <input  type="text"
                                                    name="person[family_member2_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่ตามภูมิลำเนาเดิม">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            3.&nbsp;ชื่อ ชื่อสกุล
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[family_member3_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อ ชื่อสกุล">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            อายุ
                                        </label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[family_member3_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            ปี
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            &nbsp;&nbsp;หมายเลขประจำตัวประชาชน
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[family_member3_identity]"
                                                    value=""
                                                    class="form-control" placeholder="หมายเลขประจำตัวประชาชน">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            อาชีพ
                                        </label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[family_member3_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;สถานที่ทำงาน
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[family_member3_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="สถานที่ทำงาน">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            โทร
                                        </label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="person[family_member3_workplace_tel]"
                                                    value=""
                                                    class="form-control" placeholder="โทร">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม
                                        </label>
                                        <div class="col-md-9">
                                            <input  type="text"
                                                    name="person[family_member3_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่ตามภูมิลำเนาเดิม">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            11.คนรับใช้-ลูกจ้าง</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            1.&nbsp;ชื่อ ชื่อสกุล
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[employee1_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อ ชื่อสกุล">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            อายุ
                                        </label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[employee1_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            ปี
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            &nbsp;&nbsp;หมายเลขประจำตัวประชาชน
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[employee1_identity]"
                                                    value=""
                                                    class="form-control" placeholder="หมายเลขประจำตัวประชาชน">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม
                                        </label>
                                        <div class="col-md-9">
                                            <input  type="text"
                                                    name="person[employee1_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่ตามภูมิลำเนาเดิม">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            2.&nbsp;ชื่อ ชื่อสกุล
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[employee2_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อ ชื่อสกุล">
                                        </div>
                                        <label class="col-md-2 control-label">
                                            อายุ
                                        </label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="person[employee2_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            ปี
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            &nbsp;&nbsp;หมายเลขประจำตัวประชาชน
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="person[employee2_identity]"
                                                    value=""
                                                    class="form-control" placeholder="หมายเลขประจำตัวประชาชน">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่ตามภูมิลำเนาเดิม
                                        </label>
                                        <div class="col-md-9">
                                            <input  type="text"
                                                    name="person[employee2_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่ตามภูมิลำเนาเดิม">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            12.อื่นๆที่น่าสนใจ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-10">
                                            <textarea  type="text"
                                                    name="person[others]"
                                                    value=""
                                                    class="form-control" placeholder="อื่นๆที่น่าสนใจ">
                                            </textarea>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-md-4 control-label"  onchange="readURL(this);">&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;อัพโหลดรูปประจำตัว</label>

                                <div class="col-md-4">
                                    <img id="blah" alt="กรุณาอัพโหลดรูป" width="150" height="150" />

                                </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12" align="center">
                                <input required  name="pic_path" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>

                                <!-- /.box-body -->
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary ">ตกลง</button>

                                    <a href="/person" class="btn btn-default ">ยกเลิก</a>
                                    </div>

                                </div>
                            </div>

                                <!-- /.box-footer -->
                        </form>



            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection

@section('javascript')
    <script type="text/javascript">
    </script>
@endsection