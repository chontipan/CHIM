@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/แผนที่สถานที่ทั่วไป

        </section>

        <!-- Main content -->
        <section class="content">
            <div id="mymap"></div>
        </section>
        <!-- /.content -->

    </div>

@endsection

@section('javascript')
    <script type="text/javascript">

        var locations = <?php print_r(json_encode($locations)) ?>;

        var mymap = new GMaps({
            el: '#mymap',
            lat:  19.910874,
            lng: 99.841089,

            zoom:9
        });

        $.each( locations, function( index, value ){
            mymap.addMarker({
                lat: value.lat,
                lng: value.lng,
                title: value.name,
                click: function(e) {
                    window.open('/general_place/pdf/'+value.id, '_blank');

                }
            });
        });

    </script>
@endsection