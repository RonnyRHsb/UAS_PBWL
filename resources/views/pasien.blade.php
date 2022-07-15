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
                    <li class="active">Data Pasien</li>
                </ol>
            </div>
        </div>
    </div>
</div>   
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Pasien</strong>
                <div class="pull-right">
                <a href="tambah_barang.html" class="btn btn-success btn-sm">
                    <i class="fa fa-plus">Tambah pasien</i>
                </a>
                </div>
            </div>
                <div class="card-body">
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama}}</td>
                <td>{{ $item->umur}}</td>
                <td>{{ $item->jk}}</td>
                <td>{{ $item->alamat}}</td>
                <td class="text-center">
                <a href="detail_pesanan.html" class="btn btn-warning btn-sm">
                <i class="fa fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i></a>
                    <a href="" class="btn btn-success btn-sm">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection