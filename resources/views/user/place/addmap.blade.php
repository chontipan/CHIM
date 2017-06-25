@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/ระบุพิกัดสถานที่ทั่วไป
            <h3>
                {{$place->name}}
            </h3>

        </section>

        <!-- Main content -->
        <section class="content">
          
        </section>
        <!-- /.content -->

    </div>

@endsection

@section('javascript')
    <script type="text/javascript">

    </script>
@endsection