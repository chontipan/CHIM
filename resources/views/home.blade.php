@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">หน้าหลัก</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <a href="/search" >
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-search fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">ค้นหา</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <span class="pull-left">ค้นหา</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color: #5cb85c;"></i></span>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <a href="/person" >
                                    <div class="panel panel-primary">
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
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color: #5cb85c;"></i></span>
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
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color: #5cb85c;"></i></span>
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
