@extends('layouts.admin')

@section('konten')
<div>
    <h2>Tabel Pelanggan</h2>
    <div class="pull-right">
        <a class="btn btn-sm btn-primary" href="/admin/pelanggan/create"> <i class="fas fa-backward ">Tambah Pelanggan</i> </a>
    </div>
</div><br>
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama Customer</th>
        <th>No Pelanggan</th>
        <th>Alamat Titik Langganan</th>
        <th>Jenis Langanan</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($pelanggan as $p)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$customers->firstWhere('Id', $p->Id_customer)->nama}}</td>
                <td>{{$p->nomor_pelanggan}}</td>
                <td>{{$p->Alamat_titik_langganan}}</td>
                <td>{{$jenis_langganan->firstWhere('id', $p->Id_jenis_langganan)->nama}}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="/admin/pelanggan/edit/{{ $p->id }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/admin/pelanggan/delete/{{ $p->id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection
