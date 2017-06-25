@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ค้นหา</div>

                    <div class="panel-body">

                        <div class="col-lg-12 col-md-12">
                            <form class="form-horizontal" method="get" action="/search">
                                <div class="input-group input-group-md" style="width: 600px;">
                                    <input type="text" name="keyword" class="form-control pull-right"
                                           placeholder="กรอกชื่อ-ชื่อสกุล หมายเลขบัตร ชื่อสถานที่ อำเภอที่ตั้ง จังหวัดที่ตั้ง">

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

        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">




                            <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <a href="/person">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-user fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">บุคคลทั่วไป</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <span class="pull-left">บุคคลทั่วไป</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"
                                                                        style="color: #5cb85c;"></i></span>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <a href="/criminal">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-user-secret fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">บุคคลที่เกี่ยวข้องกับอาชญากรรม</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <span class="pull-left">บุคคลที่เกี่ยวข้องกับอาชญากรรม</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"
                                                                        style="color: #5cb85c;"></i></span>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <a href="/general_place">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-home fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">สถานที่ทั่วไป</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <span class="pull-left">สถานที่ทั่วไป</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"
                                                                        style="color: #5cb85c;"></i></span>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <a href="/general_place/map">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-map fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">แผนที่สถานที่ทั่วไป</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <span class="pull-left">แผนที่สถานที่ทั่วไป</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"
                                                                        style="color: #5cb85c;"></i></span>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
