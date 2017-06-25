@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/ระบุพิกัดสถานที่ทั่วไป
            <h3>
                สถานที่ทั่วไป: {{$place->name}}
            </h3>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="panel panel-info">
                <div class="panel-heading">สถานที่ทั่วไป: {{$place->name}}</div>

                <div class="panel-body">

                <form class="form" method="post" action="/general_place/{{$place->id}}/map/create"
                      enctype="multipart/form-data">
                    {{csrf_field()}}

                        <div class="row">
                            <div class="form-group">
                        <label class="col-sm-1 control-label">ระบุพิกัด</label>

                        <input id="pac-input" class="controls" type="text" placeholder="กรอกชื่ออำเภอ หรือ จังหวัด">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                        <div class="col-sm-12 control-label">
                        <div class="container" id="map-canvas" style="height:500px; width: 900px;"></div>
                        </div>
                        </div>
                        </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">พิกัด</label>
                    </div>

                    <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Latitude (ละติจูด)</label>
                        <div class="col-sm-10">
                        <input required type="text" class="form-control input-sm" id="lat" name="lat" value="20.430461">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Longitude (ลองจิจูด)</label>
                        <div class="col-sm-10">
                        <input required type="text" class="form-control input-sm" id="lng" name="lng" value="99.884723">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                    <button class="btn btn-success">Save</button>
                    </div>
                    </div>
                </form>
            </div>
                </div></div>

        </section>
        <!-- /.content -->

    </div>


@endsection

@section('javascript')
    <script type="text/javascript">

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: {

                lat: 20.430461,
                lng: 99.884723
            },
            zoom: 14
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
            map.setZoom(Math.min(map.getZoom(), 12));

        });

        //google.maps.event.addDomListener(window, 'load', init);
        google.maps.event.addListener(marker, 'position_changed', function () {
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            $('#lat').val(lat);
            $('#lng').val(lng);
        });

    </script>
@endsection