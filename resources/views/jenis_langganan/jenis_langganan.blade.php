@extends('layouts.admin')

@section('konten')
<div>
    <h2>Tabel Jenis Langganan</h2>
    <div class="pull-right">
        <a class="btn btn-sm btn-primary" href="/admin/pelanggan/create"> <i class="fas fa-backward ">Tambah Pelanggan</i> </a>
    </div>
</div><br>
<table class="table table-bordered">
    <thead>
        <th>Id</th>
        <th>Jenis Langganan</th>
        <th>Batas bawah</th>
        <th>Tarif Dasar Satuan</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($data as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->Batas_bawah}}</td>
                <td>{{$p->Tarif_dasar_satuan}}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="/admin/langganan/edit/{{ $p->id }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/admin/langganan/delete/{{ $p->id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection
