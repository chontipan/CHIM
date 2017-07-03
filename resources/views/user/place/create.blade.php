@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/แบบประวัติสถานที่ทั่วไป
            <h1>
                แบบประวัติสถานที่ทั่วไป
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div style="padding-top: 2em">
                <div class="panel panel-info">
                    <div class="panel-heading">แบบประวัติบุคคลทั่วไป</div>

                    <div class="panel-body">

            <div class="row">

                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" id="save" enctype="multipart/form-data">

                                {{csrf_field()}}

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">1.ชื่อสถานที่</label>
                                    <div class="col-md-4">
                                        <input required type="text"
                                               id="keyword_place_name"
                                               name="place[name]"
                                               value=""
                                               class="form-control" placeholder="ชื่อสถานที่">
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#" id="search_place_name" class="btn btn-default">ค้นหา</a>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">2.ที่ตั้ง</label>
                                    <div class="col-md-8">
                                        <input required type="text"

                                               name="place[address]"
                                               value=""
                                               class="form-control" placeholder="ที่ตั้ง">
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">อำเภอ</label>
                                    <div class="col-md-2">
                                        <input  type="text"

                                               name="place[district]"
                                               value=""
                                               class="form-control" placeholder="อำเภอ">
                                    </div>
                                    <label class="col-md-2 control-label">จังหวัด</label>
                                    <div class="col-md-2">
                                        <input  type="text"
                                               name="place[province]"
                                               value=""
                                               class="form-control" placeholder="จังหวัด">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">โทร</label>
                                    <div class="col-md-2">
                                        <input type="text"

                                               name="place[tel]"
                                               value=""
                                               class="form-control" placeholder="โทร">
                                    </div>

                                </div>

                            </div>
                                <div class="row">

                                        <div class="form-group">
                                            <label  class="col-md-3 control-label">
                                                3.ชื่อเจ้าของ</label>
                                            <div class="col-md-4">
                                                <input  type="text"
                                                        id="keyword_owner_name"
                                                       name="place[owner_name]"
                                                       value=""
                                                       class="form-control" placeholder="ชื่อเจ้าของ">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#" id="search_owner_name" class="btn btn-default">ค้นหา</a>
                                            </div>
                                        </div>

                                </div>
                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        อายุ</label>
                                    <div class="col-md-2">
                                        <input  type="text"
                                                name="place[owner_age]"
                                                value=""
                                                class="form-control" placeholder="อายุ">
                                    </div>
                                    <label style="text-align: left" class="col-md-1 control-label">ปี</label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">หมายเลขประจำตัวประชาชน</label>
                                    <div class="col-md-4">
                                        <input  type="text"
                                               id="keyword_owner_identity"
                                               name="place[owner_identity]"
                                               value=""
                                               class="form-control" placeholder="หมายเลขประจำตัวประชาชน">
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#" id="search_owner_identity" class="btn btn-default">ค้นหา</a>
                                    </div>

                                </div>

                            </div>
                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        ที่อยู่ตามบัตรประจำตัวประชาชน</label>
                                    <div class="col-md-8">
                                        <input  type="text"
                                                name="place[owner_address_identity]"
                                                value=""
                                                class="form-control" placeholder="ที่อยู่ตามบัตรประจำตัวประชาชน">
                                    </div>
                                </div>

                            </div>



                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        4.ผู้ดำเนินกิจการ/ผู้ดูแล ชื่อ</label>
                                    <div class="col-md-4">
                                        <input  type="text"
                                                id="keyword_manager_name"
                                                name="place[manager_name]"
                                                value=""
                                                class="form-control" placeholder="ชื่อผู้ดำเนินกิจการ/ผู้ดูแล">
                                    </div>
                                    <div class="col-md-2">
                                        <a href="#" id="search_manager_name" class="btn btn-default">ค้นหา</a>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        อายุ</label>
                                    <div class="col-md-2">
                                        <input  type="text"
                                                name="place[manager_age]"
                                                value=""
                                                class="form-control" placeholder="อายุ">
                                    </div>
                                    <label style="text-align: left" class="col-md-1 control-label">ปี</label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">หมายเลขประจำตัวประชาชน</label>
                                        <div class="col-md-4">
                                        <input  type="text"
                                               id="keyword_manager_identity"
                                               name="place[manager_identity]"
                                               value=""
                                               class="form-control" placeholder="หมายเลขประจำตัวประชาชน">
                                    </div>


                                    <div class="col-md-2">
                                        <a href="#" id="search_manager_identity" class="btn btn-default">ค้นหา</a>
                                    </div>

                                </div>

                            </div>
                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        ที่อยู่ตามบัตรประจำตัวประชาชน</label>
                                    <div class="col-md-8">
                                        <input  type="text"
                                                name="place[manager_address_identity]"
                                                value=""
                                                class="form-control" placeholder="ที่อยู่ตามบัตรประจำตัวประชาชน">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        โทร</label>
                                    <div class="col-md-2">
                                        <input  type="text"
                                                name="place[manager_address_tel]"
                                                value=""
                                                class="form-control" placeholder="โทร">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        ที่พักอาศัยในปัจจุบัน</label>
                                    <div class="col-md-8">
                                        <input  type="text"
                                                name="place[manager_current_address]"
                                                value=""
                                                class="form-control" placeholder="ที่พักอาศัยในปัจจุบัน">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        โทร</label>
                                    <div class="col-md-2">
                                        <input  type="text"
                                                name="place[manager_current_address_tel]"
                                                value=""
                                                class="form-control" placeholder="โทร">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        5.ลักษณะทั่วไปของสถานที่</label>
                                    <div class="col-md-8">
                                        <textarea rows="4" cols="50"
                                                name="place[place_desc]"
                                                class="form-control" placeholder="ลักษณะทั่วไปของสถานที่">
                                        </textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        6.กิจกรรมของสถานที่</label>
                                    <div class="col-md-8">
                                        <textarea rows="4" cols="50"
                                                  name="place[place_event]"

                                                   class="form-control" placeholder="กิจกรรมของสถานที่">
                                        </textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group">
                                    <label  class="col-md-3 control-label">
                                        7.ข้อมูลสำคัญที่ควรทราบ</label>
                                    <div class="col-md-8">
                                        <textarea rows="4" cols="50"
                                                  name="place[place_note]"
                                                   class="form-control" placeholder="ข้อมูลสำคัญที่ควรทราบ">
                                        </textarea>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">ระบุพิกัดเพื่อปักหมุดในแผนที่</label>
                                    <div class="col-md-5">
                                    <input id="pac-input" class="form-control input-md" type="text" placeholder="กรอกชื่อสถานที่ อำเภอ หรือ จังหวัด">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">

                                        <div class="container" id="map-canvas" style="text-align: center; height:500px; width: 800px;"></div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Latitude (ละติจูด)</label>
                                    <div class="col-md-4">
                                        <input required readonly type="text" class="form-control input-md" id="lat" name="place[lat]" value="20.430461" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Longitude (ลองจิจูด)</label>
                                    <div class="col-md-4">
                                        <input required readonly type="text" class="form-control input-md" id="lng" name="place[lng]" value="99.884723">
                                    </div>
                                </div>
                            </div>

                            <hr>
                                <!-- /.box-body -->
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-5">
                                    </div>
                                    <div class="col-md-6">
                                        <button onclick="save()" type="button" class="btn btn-primary ">บันทึก</button>

                                    <a href="/general_place" class="btn btn-default ">ยกเลิก</a>
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
        $(document).ready(function () {
            $('#search_place_name').click(function (e) {

                //Get
                var bla = $('#keyword_place_name').val();

                //Set
                $('#keyword_place_name').val(bla);

               if(bla){
                   window.open('/search?keyword=' + bla, '_blank');
               }



            });

            $('#search_owner_name').click(function (e) {

                //Get
                var bla = $('#keyword_owner_name').val();
                //Set
                $('#keyword_owner_name').val(bla);
                if(bla){
                    window.open('/search?keyword=' + bla, '_blank');
                }
            });
            $('#search_owner_identity').click(function (e) {

                //Get
                var bla = $('#keyword_owner_identity').val();
                //Set
                $('#keyword_owner_identity').val(bla);
                if(bla){
                    window.open('/search?keyword=' + bla, '_blank');
                }
            });
            $('#search_manager_identity').click(function (e) {

                //Get
                var bla = $('#keyword_manager_identity').val();
                //Set
                $('#keyword_manager_identity').val(bla);
                if(bla){
                    window.open('/search?keyword=' + bla, '_blank');
                }
            });
            $('#search_manager_name').click(function (e) {

                //Get
                var bla = $('#keyword_manager_name').val();
                //Set
                $('#keyword_manager_name').val(bla);
                if(bla){
                    window.open('/search?keyword=' + bla, '_blank');
                }
            });
        });

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: {

                lat: 20.430461,
                lng: 99.884723
            },
            zoom: 15
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 20.430461,
                lng: 99.884723
            },
            map: map,
            draggable: true

        });


        var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));
        //map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('pac-input'));
        google.maps.event.addListener(searchBox, 'places_changed', function () {
            searchBox.set('map', null);


            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for (i = 0; place = places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);

                /*
                 (function(place) {
                 var marker = new google.maps.Marker({

                 position: place.geometry.location,
                 draggable: true
                 });
                 marker.bindTo('map', searchBox, 'map');
                 google.maps.event.addListener(marker, 'map_changed', function() {
                 if (!this.getMap()) {
                 this.unbindAll();
                 }
                 });
                 bounds.extend(place.geometry.location);


                 }(place));
                 */

            }
            map.fitBounds(bounds);
            searchBox.set('map', map);
            map.setZoom(Math.min(map.getZoom(), 14));

        });

        //google.maps.event.addDomListener(window, 'load', init);
        google.maps.event.addListener(marker, 'position_changed', function () {
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            $('#lat').val(lat);
            $('#lng').val(lng);
        });



        function save(id) {
            if(confirm("คุณต้องการที่จะบันทึกสถานที่นี้")){
                var form = document.getElementById('save');
                form.setAttribute('action',"/general_place/create")
                form.submit()
            }
        }
    </script>
@endsection