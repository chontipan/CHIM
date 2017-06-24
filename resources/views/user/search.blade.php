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
                        <div class="input-group input-group-sm" style="width: 300px;">
                            <input type="text" name="keyword" class="form-control pull-right"
                                    placeholder="กรอกหมายเลขบัตร หรือ ชื่อ ชื่อสกุล" value="{{$keyword}}">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search">Search</i>
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

                    <div class="panel panel-primary">
                        <div class="panel-heading">บุคคลทั่วไป</div>

                        <div class="panel-body">
                        <!-- /.box-header -->




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
                                    จำนวนบุคคลทั่วไป {{ $persons->count() }} คน
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
                                    จำนวนบุคคลที่เกี่ยวข้องกับอาชญากรรม {{ $criminals->count() }} คน
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

        </section>
        <!-- /.content -->

    </div>

@endsection

@section('javascript')
    <script type="text/javascript">
      function deletePerson(id) {
          if(confirm("คุณต้องการเป็นผู้้ลบประวัติบุคคลนี้?")){
              var form = document.getElementById('deletePerson');
              form.setAttribute('action',"/person/"+id+"/delete/{{$keyword}}")
              form.submit()
          }
      }
      function deletecriminal(id) {
          if(confirm("คุณต้องการเป็นผู้้ลบประวัติบุคคลนี้?")){
              var form = document.getElementById('deletecriminal');
              form.setAttribute('action',"/criminal/"+id+"/delete/{{$keyword}}")
              form.submit()
          }
      }
    </script>
@endsection