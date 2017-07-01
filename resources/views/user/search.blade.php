@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/ค้นหา
            <h3>ผลการค้นหา: {{$keyword}}</h3>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">ค้นหา</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="get" action="/search">
                                <div class="input-group input-group-md" style="width: 600px;">
                                    <input required type="text" name="keyword" class="form-control pull-right"
                                           placeholder="กรอกชื่อ หมายเลขบัตร ชื่อสถานที่ อำเภอที่ตั้ง จังหวัดที่ตั้ง" value={{$keyword}}>

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"> ค้นหา</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
            </div>
                <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-success">
                        <div class="panel-heading">บุคคลทั่วไป</div>

                        <div class="panel-body">
                        <!-- /.box-header -->

                            <div class="row">
                                <div class="col-md-12">
                                    จำนวนบุคคลทั่วไปทั้งหมด {{ $persons->total() }} คน
                                </div>
                            </div>


                            <table class="table table-striped">
                                <thead>

                                <tr>
                                    <th>วันที่บันทึก</th>
                                    <th>ชื่อ</th>
                                    <th>หมายเลขบัตร</th>


                                    <th>การจัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($persons as $person)
                                    <tr>
                                        <td>{{$person->created_at}}</td>

                                        <td>{{$person->fullname}}</td>
                                        <td>{{$person->identity}}</td>

                                        <td>
                                            <a href="/person/pdf_announce/{{$person->id}}"  target="_blank" class="btn btn-primary">Short-Pdf</a>
                                            <a href="/person/pdf/{{$person->id}}"  target="_blank" class="btn btn-success">Full-Pdf</a>

                                            <button onclick="deletePerson({{$person->id}})" type="button"
                                                    class="btn btn-danger">ลบ
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <form id="deletePerson" method="post">
                                {{csrf_field()}}
                            </form>
                            <div class="row">
                                <div class="col-md-12">
                                    จำนวนบุคคลทั่วไปในหน้านี้ {{ $persons->count() }} คน
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    {{ $persons->links() }}
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>


                    </div>

                </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">บุคคลที่เกี่ยวข้องกับอาชญากรรม</div>

                        <div class="panel-body">
                            <!-- /.box-header -->
                            <div class="row">
                                <div class="col-md-12">
                                    จำนวนบุคคลที่เกี่ยวข้องกับอาชญากรรมทั้งหมด {{ $criminals->total() }} คน
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>วันที่บันทึก</th>
                                    <th>ชื่อ</th>
                                    <th>หมายเลขบัตร</th>


                                    <th>การจัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($criminals as $criminal)
                                    <tr>
                                        <td>{{$criminal->created_at}}</td>

                                        <td>{{$criminal->fullname}}</td>
                                        <td>{{$criminal->identity}}</td>

                                        <td>
                                            <a href="/criminal/pdf_announce/{{$criminal->id}}"  target="_blank" class="btn btn-primary">Short-Pdf</a>
                                            <a href="/criminal/pdf/{{$criminal->id}}"  target="_blank" class="btn btn-success">Full-Pdf</a>

                                            <button onclick="deletecriminal({{$criminal->id}})" type="button"
                                                    class="btn btn-danger">ลบ
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <form id="deletecriminal" method="post">
                                {{csrf_field()}}
                            </form>

                            <div class="row">
                                <div class="col-md-12">
                                    จำนวนบุคคลที่เกี่ยวข้องกับอาชญากรรมในหน้านี้ {{ $criminals->count() }} คน
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{ $criminals->links() }}
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>


                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">สถานที่ทั่วไป</div>

                        <div class="panel-body">
                            <!-- /.box-header -->
                            <div class="row">
                                <div class="col-md-12">
                                    จำนวนสถานที่ทั่วไปทั้งหมด {{ $places->total() }} สถานที่
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
                                        <td>{{$place->created_at}}</td>

                                        <td>{{$place->name}}</td>
                                        <td>{{$place->district}}</td>
                                        <td>{{$place->province}}</td>
                                        <td>{{$place->owner_name}}</td>
                                        <td>{{$place->manager_name}}</td>

                                        <td>
                                            <a href="/general_place/pdf_announce/{{$place->id}}"  target="_blank" class="btn btn-primary">Short-Pdf</a>
                                            <a href="/general_place/pdf/{{$place->id}}"  target="_blank" class="btn btn-success">Full-Pdf</a>

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
                                    จำนวนสถานที่ทั่วไปในหน้านี้ {{ $places->count() }} สถานที่
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

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">สถานที่ที่เกี่ยวข้องกับอาชญากรรม</div>

                        <div class="panel-body">
                            <!-- /.box-header -->
                            <div class="row">

                <div class="col-md-12">
                    จำนวนสถานที่ที่เกี่ยวข้องกับอาชญากรรมทั้งหมด {{ $crime_places->total() }} สถานที่
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
                @foreach($crime_places as $crime_place)
                    <tr>
                        <td>{{$crime_place->time_at}}</td>

                        <td>{{$crime_place->name}}</td>
                        <td>{{$crime_place->district}}</td>
                        <td>{{$crime_place->province}}</td>
                        <td>{{$crime_place->owner_name}}</td>
                        <td>{{$crime_place->manager_name}}</td>

                        <td>
                            <a href="/crime_place/pdf_announce/{{$crime_place->id}}"  target="_blank" class="btn btn-warning">Short-Pdf</a>
                            <a href="/crime_place/pdf/{{$crime_place->id}}"  target="_blank" class="btn btn-success">Full-Pdf</a>
                            <button onclick="deleteCrimePlace({{$crime_place->id}})" type="button"
                                    class="btn btn-danger">ลบ
                            </button>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
                            <form id="deleteCrimePlace" method="post">
                                {{csrf_field()}}
                            </form>

            <div class="row">
                <div class="col-md-12">
                    จำนวนสถานที่ที่เกี่ยวข้องกับอาชญากรรมในหน้านี้ {{ $crime_places->count() }} สถานที่
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $crime_places->links() }}
                </div>
            </div>


</div></div></div></div>
        </section>
        <!-- /.content -->

    </div>

@endsection

@section('javascript')
    <script type="text/javascript">
      function deletePerson(id) {
          if(confirm("คุณต้องการเป็นผู้ลบประวัติบุคคลนี้?")){
              var form = document.getElementById('deletePerson');
              form.setAttribute('action',"/person/"+id+"/delete/{{$keyword}}")
              form.submit()
          }
      }
      function deletecriminal(id) {
          if(confirm("คุณต้องการเป็นผู้ลบประวัติบุคคลนี้?")){
              var form = document.getElementById('deletecriminal');
              form.setAttribute('action',"/criminal/"+id+"/delete/{{$keyword}}")
              form.submit()
          }
      }

      function deletePlace(id) {
          if(confirm("คุณต้องการเป็นผู้ลบประวัติสถานที่นี้?")){
              var form = document.getElementById('deletePlace');
              form.setAttribute('action',"/general_place/"+id+"/delete/{{$keyword}}")
              form.submit()
          }
      }
      function deleteCrimePlace(id) {
          if(confirm("คุณต้องการเป็นผู้ลบประวัติสถานที่นี้?")){
              var form = document.getElementById('deleteCrimePlace');
              form.setAttribute('action',"/crime_place/"+id+"/delete/{{$keyword}}")
              form.submit()
          }
      }
    </script>
@endsection