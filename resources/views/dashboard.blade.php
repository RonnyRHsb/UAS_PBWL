@extends('layouts.app')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                </ol>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-user-plus text-primary" aria-hidden="true"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Data Pasien</div>
                        <div class="stat-digit">1,012</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-medkit text-danger border-danger" aria-hidden="true"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Data Obat</div>
                        <div class="stat-digit">961</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-user-md text-warning" aria-hidden="true"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Data Dokter</div>
                        <div class="stat-digit">770</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-address-card text-secondary" aria-hidden="true"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Rekaman Medis</div>
                        <div class="stat-digit">770</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection