@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/บุคคลทั่วไป

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">บุคคลทั่วไป</div>

                        <div class="panel-body">
                        <!-- /.box-header -->

                            <form class="form-horizontal" method="get" action="/person">
                            <div class="input-group input-group-sm" style="width: 300px;">
                                <input type="text" name="keyword" class="form-control pull-right"
                                       placeholder="กรอกหมายเลขบัตร หรือ ชื่อ ชื่อสกุล">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search">Search</i>
                                    </button>
                                </div>
                            </div>
                            </form>

                            <div class="pull-right">
                            <a href="/person/create" class="btn btn-primary">
                                เพิ่มประวัติบุคคลทั่วไป
                            </a>
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

        </section>
        <!-- /.content -->

    </div>

@endsection

@section('javascript')
    <script type="text/javascript">
      function deletePerson(id) {
          if(confirm("คุณต้องการเป็นผู้้ลบประวัติบุคคลทั่วไปนี้?")){
              var form = document.getElementById('deletePerson');
              form.setAttribute('action',"/person/"+id+"/delete")
              form.submit()
          }
      }
    </script>
@endsection