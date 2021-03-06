@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/สถานที่ที่เกี่ยวข้องกับอาชญากรรม

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row" style="padding-top: 1em">
                <div class="col-md-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">สถานที่ที่เกี่ยวข้องกับอาชญากรรม <a class="btn btn-success" href="/crime_place/map"><i class="fa fa-map-o"></i> ดูแบบแผนที่</a></div>

                        <div class="panel-body">
                        <!-- /.box-header -->
                            <div class="row" style="padding-top: 1em">
                                <div class="col-md-12">
                                    @if (Session::has('msg')=="บันทึกสถานที่ที่เกี่ยวกับอาชญากรรมสำเร็จ"||Session::has('msg')=="ลบสถานที่ที่เกี่ยวกับอาชญากรรมสำเร็จ")
                                        <div class="alert alert-success">
                                            <ul>

                                                <li>{{ Session::get('msg') }}</li>

                                            </ul>
                                        </div>

                                    @endif
                                </div>
                            </div>
                            <form class="form-horizontal" method="get" action="/crime_place">
                            <div class="input-group input-group-md" style="width: 600px;">
                                <input type="text" name="keyword" class="form-control pull-right"
                                       placeholder="กรอกชื่อสถานที่ ชื่อ/หมายเลขบัตรประจำตัวประชาชน อำเภอที่ตั้ง จังหวัดที่ตั้ง" value={{$keyword}}>

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"> ค้นหา</i>
                                    </button>
                                </div>
                            </div>
                            </form>

                            <div class="pull-right">
                            <a href="/crime_place/create" class="btn btn-primary">
                                เพิ่มประวัติสถานที่ที่เกี่ยวข้องกับอาชญากรรม
                            </a>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    จำนวนสถานที่ที่เกี่ยวข้องกับอาชญากรรมทั้งหมด {{ $places->total() }} สถานที่
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>วันที่บันทึก</th>
                                    <th>ชื่อสถานที่</th>
                                    <th>อำเภอ</th>
                                    <th>จังหวัด</th>
                                    <th>ชื่อเจ้าของ</th>
                                    <th>ชื่อผู้ดูแล</th>


                                    <th>การจัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($places as $place)
                                    <tr>
                                        <td>{{$place->time_at}}</td>

                                        <td>{{$place->name}}</td>
                                        <td>{{$place->district}}</td>
                                        <td>{{$place->province}}</td>
                                        <td>{{$place->owner_name}}</td>
                                        <td>{{$place->manager_name}}</td>

                                        <td>
                                            <a href="/crime_place/pdf_announce/{{$place->id}}"  target="_blank" class="btn btn-warning">Short-Pdf</a>
                                            <a href="/crime_place/pdf/{{$place->id}}"  target="_blank" class="btn btn-success">Full-Pdf</a>
                                            <a href="/general_place/pics/pdf/{{$place->id}}"  target="_blank" class="btn btn-info">Images</a>

                                            <button onclick="deletePlace({{$place->id}})" type="button"
                                                    class="btn btn-danger">ลบ
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <form id="deletePlace" method="post">
                                {{csrf_field()}}
                            </form>

                            <div class="row">
                                <div class="col-md-12">
                                    จำนวนสถานที่ที่เกี่ยวข้องกับอาชญากรรมในหน้านี้ {{ $places->count() }} สถานที่
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{ $places->links() }}
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>


                    </div>

                </div>

        </section>
        <!-- /.content -->

    </div>

@endsection

@section('javascript')
    <script type="text/javascript">
      function deletePlace(id) {
          if(confirm("คุณต้องการเป็นผู้ลบประวัติสถานที่นี้?")){
              var form = document.getElementById('deletePlace');
              form.setAttribute('action',"/crime_place/"+id+"/delete")
              form.submit()
          }
      }
    </script>
@endsection