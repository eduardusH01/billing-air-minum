@extends('layouts.admin')

@section('konten')
<div>
    <h2>Tabel Pelanggan</h2>
    <div class="pull-right">
        <a class="btn btn-sm btn-primary" href="#"> <i class="fas fa-backward ">Tambah Pelanggan</i> </a>
    </div>
</div><br>
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama Customer</th>
        <th>No Pelanggan</th>
        <th>Alamat Titik Langganan</th>
        <th>Action</th>
    </thead>

</table>  
@endsection
