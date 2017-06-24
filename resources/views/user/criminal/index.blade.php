@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/home">หน้าหลัก</a>/บุคคลที่เกี่ยวข้องกับอาชญากรรม

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row" style="padding-top: 1em">
                <div class="col-md-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">บุคคลที่เกี่ยวข้องกับอาชญากรรม</div>

                        <div class="panel-body">
                            <!-- /.box-header -->

                            <form class="form-horizontal" method="get" action="/criminal">
                                <div class="input-group input-group-sm" style="width: 300px;">
                                    <input type="text" name="keyword" class="form-control pull-right"
                                           placeholder="กรอกหมายเลขบัตร หรือ ชื่อ ชื่อสกุล" value={{$keyword}}>

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"> ค้นหา</i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="pull-right">
                                <a href="/criminal/create" class="btn btn-primary">
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
        function deletecriminal(id) {
            if(confirm("คุณต้องการเป็นผู้ลบประวัติบุคคลนี้?")){
                var form = document.getElementById('deletecriminal');
                form.setAttribute('action',"/criminal/"+id+"/delete")
                form.submit()
            }
        }
    </script>
@endsection