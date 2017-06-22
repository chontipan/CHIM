@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">หน้าหลัก</div>

                <div class="panel-body">

                    <div class="col-lg-6 col-md-6">
                        <a href="/person">
                            บุคคลทั่วไป
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <a href="/criminal">
บุคคลที่เกี่ยวข้องกับอาชญากรรม
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
