@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/แผนที่สถานที่ที่เกี่ยวข้องกับอาชญากรรม

        </section>

        <!-- Main content -->
        <section class="content">
            <div style="padding-top: 1em">
            <div class="panel panel-warning">
                <div class="panel-heading">แผนที่สถานที่ที่เกี่ยวข้องกับอาชญากรรม</div>

                <div class="panel-body">
            <div  id="mymap"></div>
                </div>
            </div>
            </div>
        </section>
        <!-- /.content -->

    </div>

@endsection

@section('javascript')
    <script type="text/javascript">

        var locations = <?php print_r(json_encode($locations)) ?>;

        var mymap = new GMaps({
            el: '#mymap',
            lat:  20.232534,
            lng: 100.138436,

            zoom:11
        });

        $.each( locations, function( index, value ){
            mymap.addMarker({
                lat: value.lat,
                lng: value.lng,
                title: value.name,
                click: function(e) {
                    window.open('/crime_place/pdf/'+value.id, '_blank');

                }
            });
        });

    </script>
@endsection