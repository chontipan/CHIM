@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/แบบประวัติบุคคลที่เกี่ยวข้องกับอาชญากรรม

        </section>

        <!-- Main content -->
        <section class="content">
            <div style="padding-top: 2em">
            <div class="panel panel-danger">
                <div class="panel-heading">แบบประวัติบุคคลที่เกี่ยวข้องกับอาชญากรรม</div>

                <div class="panel-body">

            <div class="row">

                        <!-- /.box-header -->
                        <!-- form start -->
                <form class="form-horizontal" method="post" action="/criminal/create" enctype="multipart/form-data">
                                {{csrf_field()}}

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ประเภทบุคคล</label>
                                    <div class="col-sm-4">
                                        <input type="text"
                                               name="criminal[type_person]"
                                               value=""
                                               class="form-control" placeholder="ประเภทบุคคล">
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">1. ชื่อ-ชื่อสกุล</label>
                                            <div class="col-sm-4">
                                                <input required type="text"
                                                       id="keyword_name"
                                                       name="criminal[fullname]"
                                                       value=""
                                                       class="form-control" placeholder="ชื่อ-ชื่อสกุล">
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="#" id="search_name" class="btn btn-default">ค้นหา</a>

                                            </div>
                                        </div>
                                </div>
                                <div class="row">

                                        <div class="form-group">
                                            <label style="text-align: left" class="col-sm-2 control-label">
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                2. อายุ</label>
                                            <div class="col-sm-2">
                                                <input  type="text"
                                                       name="criminal[age]"
                                                       value=""
                                                       class="form-control" placeholder="อายุ">
                                            </div>
                                            <label style="text-align: left" class="col-sm-2 control-label">ปี</label>
                                        </div>

                                </div>
                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-3 control-label">
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                        1.1 นามแฝง</label>
                                    <div class="col-sm-4">
                                        <input  type="text"
                                                name="criminal[nickname1]"
                                                value=""
                                                class="form-control" placeholder="นามแฝง">
                                    </div>

                                </div>

                            </div>
                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-3 control-label">
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                        1.2 นามแฝง</label>
                                    <div class="col-sm-4">
                                        <input  type="text"
                                                name="criminal[nickname2]"
                                                value=""
                                                class="form-control" placeholder="นามแฝง">
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-3 control-label">
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                        ประเภทบัตร</label>
                                    <div class="col-sm-3">

                                            <select class="form-control" name="criminal[type_identity]">
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
                                    <div class="col-sm-4">
                                        <input  type="text"
                                                id="keyword_identity"
                                               name="criminal[identity]"
                                               value=""
                                               class="form-control" placeholder="หมายเลขบัตร">
                                    </div>
                                    <div class="col-sm-2">

                                        <a href="#" id="search_identity" class="btn btn-default">ค้นหา</a>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            3.ที่อยู่ปัจจุบัน</label>
                                        <div class="col-md-7">
                                            <input  type="text"
                                                    name="criminal[current_address]"
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
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[current_address_tel]"
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
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;ภูมิลำเนาเดิม
                                        </label>
                                        <div style="padding-left: 0em" class="col-md-7">
                                            <input  type="text"
                                                    name="criminal[origin_address]"
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
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[origin_address_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทร">
                                        </div>
                                    </div>
                                </div>
                            </div>


                                <div class="row">

                                        <div class="form-group">
                                            <label style="text-align: left" class="col-sm-2 control-label">
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
                                                4.อาชีพ</label>
                                            <div class="col-sm-2">
                                                <input  type="text"
                                                       name="criminal[job]"
                                                       value=""
                                                       class="form-control" placeholder="อาชีพ">
                                            </div>
                                            <label style="text-align: left" class="col-sm-3 control-label">
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
                                                สถานที่ทำงาน</label>
                                            <div class="col-sm-4">
                                                <input  type="text"
                                                        name="criminal[workplace_name]"
                                                        value=""
                                                        class="form-control" placeholder="สถานที่ทำงาน">
                                            </div>

                                        </div>

                                </div>


                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;5.การศึกษา
                                        </label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[education]"
                                                    value=""
                                                    class="form-control" placeholder="การศึกษา">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
                                            6.ชื่อบิดา</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                   name="criminal[father_name]"
                                                   value=""
                                                   class="form-control" placeholder="ชื่อบิดา">
                                        </div>
                                        <label class="col-md-1 control-label">อายุ</label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                   name="criminal[father_age]"
                                                   value=""
                                                   class="form-control" placeholder="อายุ">
                                        </div>
                                        <label style="text-align: left" class="col-md-1 control-label">ปี</label>


                                        <div class="form-group">
                                            <div class="col-md-2">

                                                <select class="form-control" name="criminal[father_status]">
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
                                                   name="criminal[father_address]"
                                                   value=""
                                                   class="form-control" placeholder="ที่อยู่">
                                        </div>
                                        <label class="col-md-1 control-label">โทร</label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="criminal[father_address_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&nbsp;&nbsp;อาชีพ</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[father_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&nbsp;&nbsp;ที่ทำงาน</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[father_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="ที่ทำงาน">
                                        </div>
                                        <label class="col-md-1 control-label">โทร</label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="criminal[father_workplace_tel]"
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
                                            7.ชื่อมารดา</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[mother_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อมารดา">
                                        </div>
                                        <label class="col-md-1 control-label">อายุ</label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="criminal[mother_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label style="text-align: left" class="col-md-1 control-label">ปี</label>


                                        <div class="form-group">
                                            <div class="col-md-2">

                                                <select class="form-control" name="criminal[mother_status]">
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
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[mother_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่">
                                        </div>
                                        <label class="col-md-1 control-label">โทร</label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="criminal[mother_address_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&nbsp;&nbsp;อาชีพ</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[mother_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่ทำงาน</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[mother_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="ที่ทำงาน">
                                        </div>
                                        <label class="col-md-1 control-label">โทร</label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="criminal[mother_workplace_tel]"
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
                                            8.ชื่อสามี/ภรรยา</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[spouse_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อสามี/ภรรยา">
                                        </div>
                                        <label class="col-md-1 control-label">อายุ</label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="criminal[spouse_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label style="text-align: left" class="col-md-1 control-label">ปี</label>


                                        <div class="form-group">
                                            <div class="col-md-2">

                                                <select class="form-control" name="criminal[spouse_status]">
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
                                                    name="criminal[spouse_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่">
                                        </div>
                                        <label class="col-md-1 control-label">โทร</label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="criminal[spouse_address_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&nbsp;&nbsp;อาชีพ</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[spouse_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่ทำงาน</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[spouse_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="ที่ทำงาน">
                                        </div>
                                        <label class="col-md-1 control-label">โทร</label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="criminal[spouse_workplace_tel]"
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
                                            9.ชื่อบุตร</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[child_name]"
                                                    value=""
                                                    class="form-control" placeholder="ชื่อบุตร">
                                        </div>
                                        <label class="col-md-1 control-label">
                                            อายุ
                                        </label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="criminal[child_age]"
                                                    value=""
                                                    class="form-control" placeholder="อายุ">
                                        </div>
                                        <label class="col-md-1 control-label">
                                           ปี
                                        </label>

                                        <div class="form-group">
                                            <div class="col-md-2">

                                                <select class="form-control" name="criminal[child_status]">
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
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่อยู่</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[child_address]"
                                                    value=""
                                                    class="form-control" placeholder="ที่อยู่">
                                        </div>
                                        <label class="col-md-1 control-label">โทร</label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="criminal[child_address_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">&emsp;&emsp;&emsp;
                                            &emsp;&emsp;&emsp;&nbsp;&nbsp;อาชีพ</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[child_job]"
                                                    value=""
                                                    class="form-control" placeholder="อาชีพ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ที่ทำงาน</label>
                                        <div class="col-md-4">
                                            <input  type="text"
                                                    name="criminal[child_workplace]"
                                                    value=""
                                                    class="form-control" placeholder="ที่ทำงาน">
                                        </div>
                                        <label class="col-md-1 control-label">โทร</label>
                                        <div class="col-md-2">
                                            <input  type="text"
                                                    name="criminal[child_workplace_tel]"
                                                    value=""
                                                    class="form-control" placeholder="เบอร์โทรติดต่อ">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;10.ตำหนิรูปพรรณ</label>
                                        <label  style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;สูงประมาณ</label>
                                        <div class="col-md-1">
                                            <input  type="text"
                                                    name="criminal[height]"
                                                    value=""
                                                    class="form-control" placeholder="">
                                        </div>
                                        <label class="col-md-1 control-label">ซม.</label>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- รูปร่าง</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;สันทัด,อ้วน,เตี้ย,ผอม,สูง,อื่นๆ</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[shape]"
                                                    value=""
                                                    class="form-control" placeholder="สันทัด,อ้วน,เตี้ย,ผอม,สูง,อื่นๆ">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- ฟัน</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;เหยิน,ปกติ,หลอ,ขาว</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[tooth]"
                                                    value=""
                                                    class="form-control" placeholder="เหยิน,ปกติ,หลอ,ขาว">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- ผิว</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ดำ,ขาว,ดำแดง,ขาวเหลือง</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[skin]"
                                                    value=""
                                                    class="form-control" placeholder="ดำ,ขาว,ดำแดง,ขาวเหลือง">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- ทรงผม</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;รองทรง,สั้นเกรียน,แสกซ้าย,หยิกหยักโศก,ยาวประบ่า</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[hair]"
                                                    value=""
                                                    class="form-control" placeholder="รองทรง,สั้นเกรียน,แสกซ้าย,หยิกหยักโศก,ยาวประบ่า">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- ศรีษะ</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;สามเหลี่ยม,สี่เหลี่ยม,กลม,รูปไข่,หัวล้าน(แบบไหน)</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[head]"
                                                    value=""
                                                    class="form-control" placeholder="สามเหลี่ยม,สี่เหลี่ยม,กลม,รูปไข่,หัวล้าน(แบบไหน)">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- ใบหน้า</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;สามเหลี่ยม,สี่เหลี่ยม,รูปไข่</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[face]"
                                                    value=""
                                                    class="form-control" placeholder="สามเหลี่ยม,สี่เหลี่ยม,รูปไข่">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- คิ้ว</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;หนา,บาง,คิ้วต่อ</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[eyebrow]"
                                                    value=""
                                                    class="form-control" placeholder="หนา,บาง,คิ้วต่อ">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- ตา</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;เล็ก,ตี่,ตาสองชั้น,ชั้นเดียว,ตาเหล่,ตาเอก</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[eye]"
                                                    value=""
                                                    class="form-control" placeholder="เล็ก,ตี่,ตาสองชั้น,ชั้นเดียว,ตาเหล่,ตาเอก">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- หู</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;กาง,บาน,แหว่ง,ปกติ</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[ear]"
                                                    value=""
                                                    class="form-control" placeholder="กาง,บาน,แหว่ง,ปกติ">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- จมูก</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;โด่ง,แบน,โหว่,ธรรมดา</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[nose]"
                                                    value=""
                                                    class="form-control" placeholder="โด่ง,แบน,โหว่,ธรรมดา">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- ปาก</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;หนา,บาง,แหว่ง,กว้าง,กระจับ</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[mouse]"
                                                    value=""
                                                    class="form-control" placeholder="หนา,บาง,แหว่ง,กว้าง,กระจับ">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- คาง</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;สี่เหลี่ยม,สามเหลี่ยม,มน</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[chin]"
                                                    value=""
                                                    class="form-control" placeholder="สี่เหลี่ยม,สามเหลี่ยม,มน">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- หนวด,เครา</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;หนวดยาว,สั้น,มีเครา,ไม่มีเครา</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[beard]"
                                                    value=""
                                                    class="form-control" placeholder="หนวดยาว,สั้น,มีเครา,ไม่มีเครา">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-5 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- แผลเป็นหรือตำหนิพิการที่ติดตัวมาแต่กำเนิด</label>
                                        <label  style="text-align: left" class="col-md-3 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ไฝ,ปาน,รอยแผลเป็น</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[scar]"
                                                    value=""
                                                    class="form-control" placeholder="ไฝ,ปาน,รอยแผลเป็น">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-2 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- สำเนียง</label>
                                        <label  style="text-align: left" class="col-md-6 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ภาคกลาง,อีสาน,ใต้,เหนือ</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[pronunciation]"
                                                    value=""
                                                    class="form-control" placeholder="ภาคกลาง,อีสาน,ใต้,เหนือ">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- ลักษณะเด่นที่สังเกตเห็นได้ง่าย</label>
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ตาเหล่,ตาเอก,นิ้วหัวแม่มือซ้ายด้วน,ขาเป๋</label>
                                        <div class="col-md-3">
                                            <input  type="text"
                                                    name="criminal[noteable]"
                                                    value=""
                                                    class="form-control" placeholder="ตาเหล่,ตาเอก,นิ้วหัวแม่มือซ้ายด้วน,ขาเป๋">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;11.อุปนิสัย</label>
                                        <div class="col-md-7">
                                            <input  type="text"
                                                    name="criminal[behavior]"
                                                    value=""
                                                    class="form-control" placeholder="อุปนิสัย">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;12.สถานที่ชอบไปเที่ยวเตร่</label>
                                        <div class="col-md-7">
                                            <input  type="text"
                                                    name="criminal[favor_place]"
                                                    value=""
                                                    class="form-control" placeholder="สถานที่ชอบไปเที่ยวเตร่">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;13.ประวัติการกระทำความผิด</label>
                                        <div class="col-md-7">
                                            <input  type="text"
                                                    name="criminal[previous_crime]"
                                                    value=""
                                                    class="form-control" placeholder="ประวัติการกระทำความผิด">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;14.อาวุธที่ใช้ในการกระทำผิด</label>
                                        <div class="col-md-7">
                                            <input  type="text"
                                                    name="criminal[weapon]"
                                                    value=""
                                                    class="form-control" placeholder="อาวุธที่ใช้ในการกระทำผิด">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;15.ยานพาหนะที่ใช้</label>
                                        <div class="col-md-7">
                                            <input  type="text"
                                                    name="criminal[vehicle]"
                                                    value=""
                                                    class="form-control" placeholder="ยานพาหนะที่ใช้">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;16.ผู้ร่วมกระทำผิด</label>
                                        <div class="col-md-7">
                                             <textarea rows="4" cols="50"
                                                    name="criminal[crime_related]"
                                                    value=""
                                                    class="form-control" placeholder="ผู้ร่วมกระทำผิด">
                                                 </textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;17.รายละเอียดหรือวิธีการกระทำความผิด</label>
                                        <div class="col-md-7">
                                            <textarea rows="4" cols="50"
                                                    name="criminal[crime_desc]"

                                                    class="form-control" placeholder="รายละเอียดหรือวิธีการกระทำความผิด">
                                            </textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label  style="text-align: left" class="col-md-4 control-label">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;18.พฤติการณ์อื่นๆที่น่าสนใจ</label>
                                        <div class="col-md-7">
                                            <textarea rows="4" cols="50"
                                                       name="criminal[others]"

                                                       class="form-control" placeholder="พฤติการณ์อื่นๆที่น่าสนใจ">
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
                                        <button type="submit" class="btn btn-primary ">บันทึก</button>
                                    <a href="/criminal" class="btn btn-default ">ยกเลิก</a>
                                    </div>

                                </div>
                            </div>

                                <!-- /.box-footer -->
                        </form>



            </div>
                </div>
            </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection

@section('javascript')
    <script type="text/javascript">
            $(document).ready(function(){
                $("#search_name").click(function(){
                    var bla = $('#keyword_name').val();
                    $('#keyword_name').val(bla);
                    if(bla){
                        window.open('/search?keyword=' + bla, '_blank');
                    }
                });
                $("#search_identity").click(function(){
                    var bla = $('#keyword_identity').val();
                    $('#keyword_identity').val(bla);
                    if(bla){
                        window.open('/search?keyword=' + bla, '_blank');
                    }
                });
            });

    </script>
@endsection