@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                แบบประวัติสถานที่ทั่วไป
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" action="/general_place/create" enctype="multipart/form-data">

                                {{csrf_field()}}

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">1.ชื่อสถานที่</label>
                                    <div class="col-sm-8">
                                        <input type="text"
                                               id="keyword_place_name"
                                               name="place[name]"
                                               value=""
                                               class="form-control" placeholder="ชื่อสถานที่">
                                    </div>
                                    <div class="col-sm-2">
                                        <button src="#" id="search_place_name">ค้นหา</button>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">2.ที่ตั้ง</label>
                                    <div class="col-sm-10">
                                        <input  type="text"

                                               name="place[address]"
                                               value=""
                                               class="form-control" placeholder="ที่ตั้ง">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">อำเภอ</label>
                                    <div class="col-sm-4">
                                        <input  type="text"

                                               name="place[district]"
                                               value=""
                                               class="form-control" placeholder="อำเภอ">
                                    </div>
                                    <label class="col-sm-2 control-label">จังหวัด</label>
                                    <div class="col-sm-4">
                                        <input  type="text"

                                               name="place[province]"
                                               value=""
                                               class="form-control" placeholder="จังหวัด">
                                    </div>

                                </div>

                            </div>
                                <div class="row">

                                        <div class="form-group">
                                            <label style="text-align: left" class="col-sm-3 control-label">
                                                3.ชื่อเจ้าของ</label>
                                            <div class="col-sm-7">
                                                <input  type="text"
                                                        id="keyword_owner_name"
                                                       name="place[owner_name]"
                                                       value=""
                                                       class="form-control" placeholder="ชื่อเจ้าของ">
                                            </div>
                                            <div class="col-sm-2">
                                                <button src="#" id="search_owner_name">ค้นหา</button>
                                            </div>
                                        </div>

                                </div>
                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-2 control-label">
                                        อายุ</label>
                                    <div class="col-sm-8">
                                        <input  type="text"
                                                name="place[owner_age]"
                                                value=""
                                                class="form-control" placeholder="อายุ">
                                    </div>
                                    <label style="text-align: left" class="col-sm-2 control-label">ปี</label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">หมายเลขประจำตัวประชาชน</label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                               id="keyword_owner_identity"
                                               name="place[ownner_identity]"
                                               value=""
                                               class="form-control" placeholder="หมายเลขประจำตัวประชาชน">
                                    </div>
                                    <div class="col-sm-2">
                                        <button src="#" id="search_owner_identity">ค้นหา</button>
                                    </div>

                                </div>

                            </div>
                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-4 control-label">
                                        ที่อยู่ตามบัตรประจำตัวประชาชน</label>
                                    <div class="col-sm-8">
                                        <input  type="text"
                                                name="place[owner_address_identity]"
                                                value=""
                                                class="form-control" placeholder="ที่อยู่ตามบัตรประจำตัวประชาชน">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-4 control-label">
                                        4.ผู้ดำเนินกิจการ/ผู้ดูแล ชื่อ</label>
                                    <div class="col-sm-6">
                                        <input  type="text"
                                                id="keyword_manager_name"
                                                name="place[manager_name]"
                                                value=""
                                                class="form-control" placeholder="ชื่อู้ดำเนินกิจการ/ผู้ดูแล">
                                    </div>
                                    <div class="col-sm-2">
                                        <button src="#" id="search_manager_name">ค้นหา</button>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-2 control-label">
                                        อายุ</label>
                                    <div class="col-sm-8">
                                        <input  type="text"
                                                name="place[manager_age]"
                                                value=""
                                                class="form-control" placeholder="อายุ">
                                    </div>
                                    <label style="text-align: left" class="col-sm-2 control-label">ปี</label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">หมายเลขประจำตัวประชาชน</label>
                                    <div class="col-sm-7">
                                        <input  type="text"
                                               id="keyword_manager_identity"
                                               name="place[manager_identity]"
                                               value=""
                                               class="form-control" placeholder="หมายเลขประจำตัวประชาชน">
                                    </div>
                                    <div class="col-sm-2">
                                        <button src="#" id="search_manager_identity">ค้นหา</button>
                                    </div>

                                </div>

                            </div>
                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-4 control-label">
                                        ที่อยู่ตามบัตรประจำตัวประชาชน</label>
                                    <div class="col-sm-8">
                                        <input  type="text"
                                                name="place[manager_address_identity]"
                                                value=""
                                                class="form-control" placeholder="ที่อยู่ตามบัตรประจำตัวประชาชน">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-2 control-label">
                                        โทร</label>
                                    <div class="col-sm-10">
                                        <input  type="text"
                                                name="place[manager_address_tel]"
                                                value=""
                                                class="form-control" placeholder="โทร">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-4 control-label">
                                        ที่พักอาศัยในปัจจุบัน</label>
                                    <div class="col-sm-8">
                                        <input  type="text"
                                                name="place[manager_current_address]"
                                                value=""
                                                class="form-control" placeholder="ที่พักอาศัยในปัจจุบัน">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-2 control-label">
                                        โทร</label>
                                    <div class="col-sm-10">
                                        <input  type="text"
                                                name="place[manager_current_address_tel]"
                                                value=""
                                                class="form-control" placeholder="โทร">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-2 control-label">
                                        5.ลักษณะทั่วไปของสถานที่</label>
                                    <div class="col-sm-10">
                                        <textarea  type="text"
                                                name="place[place_desc]"
                                                value=""
                                                class="form-control" placeholder="ลักษณะทั่วไปของสถานที่">
                                        </textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-4 control-label">
                                        6.กิจกรรมของสถานที่</label>
                                    <div class="col-sm-8">
                                        <textarea  type="text"
                                                   name="place[place_event]"
                                                   value=""
                                                   class="form-control" placeholder="กิจกรรมของสถานที่">
                                        </textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label style="text-align: left" class="col-sm-4 control-label">
                                        7.ข้อมูลสำคัญที่ควรทราบ</label>
                                    <div class="col-sm-8">
                                        <textarea  type="text"
                                                   name="place[place_note]"
                                                   value=""
                                                   class="form-control" placeholder="ข้อมูลสำคัญที่ควรทราบ">
                                        </textarea>
                                    </div>
                                </div>

                            </div>


                                <!-- /.box-body -->
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary ">ตกลง</button>

                                    <a href="/general_place" class="btn btn-default ">ยกเลิก</a>
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
        $(document).ready(function () {
            $('#search_name').click(function (e) {

                //Get
                var bla = $('#keyword_name').val();

                //Set
                $('#keyword_name').val(bla);

               if(bla){
                   window.open('/search?keyword=' + bla, '_blank');
               }



            });

            $('#search_identity').click(function (e) {

                //Get
                var bla = $('#keyword_identity').val();

                //Set
                $('#keyword_identity').val(bla);

                if(bla){
                    window.open('/search?keyword=' + bla, '_blank');
                }



            });



        });
    </script>
@endsection