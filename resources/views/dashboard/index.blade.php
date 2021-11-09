@extends('layout/template')
@section('title','Dashboard')
@section('breadcrumbs')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
@endsection

@section('content')
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('komet/img/komet-uin-malang.png') }}" alt="AdminLTELogo" height="100">
</div>
    <!-- Small boxes (Stat box) -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                <h3>{{Date('D')}}</h3>
                <p>{{Date('d M Y')}}</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                <h3>#</h3>
                <p>#</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>#</h3>
                <p>#</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                <h3>#</h3>
                <p>#</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Quote</h3>
            <!-- <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div> -->
        </div>
        <div class="box-body">
            Selamat datang user <strong><?= auth()->user()->name ?></strong><br>
        <i>“Knowledge is the life of the mind — Ilmu adalah kehidupan bagi pikiran — Sahabat Abu Bakar Radhiyallahu ta`ala `anhu.”</i>
        <h4>Download Manual Book Komet <a href='' class='btn btn-info' target='_blank'><i class='fa fa-download'></i> Download</a></div><!-- /.box-body -->
        <div class="box-footer">
            – (Anonim)
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
@endsection