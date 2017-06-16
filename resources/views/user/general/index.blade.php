@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                บุคคลทั่วไป
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">บุคคลทั่วไป</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right"
                                           placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <a href="/admin/branch/create" class="btn btn-primary">
                                เพิ่มสาขา
                            </a>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ชื่อสาขา</th>
                                    <th>รายละเอียด</th>

                                    <th>การจัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($persons as $person)
                                    <tr>
                                        <td>{{$person->id}}</td>
                                        <td>{{$person->name}}</td>

                                        <td>
                                            <a href="/admin/branch/{{$person->id}}/edit" class="btn btn-success">แก้ไข</a>
                                            <button onclick="deleteBranch({{$person->id}})" type="button"
                                                    class="btn btn-danger">ลบ
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <form id="deleteBranch" method="post">
                                {{csrf_field()}}
                            </form>
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
      function deleteBranch(id) {
          if(confirm("Do you want to delete this branch?")){
              var form = document.getElementById('deleteBranch');
              form.setAttribute('action',"/admin/branch/"+id+"/delete")
              form.submit()
          }
      }
    </script>
@endsection