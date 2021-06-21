@extends('layouts.admin')

@section('konten')
<div>
    <h2>Tabel Tagihan</h2>
    <div class="pull-right">
        <a class="btn btn-sm btn-primary" href="/admin/tagihan/create"> <i class="fas fa-backward ">Buat Tagihan Baru</i> </a>
    </div>
</div><br>
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama Customer</th>
        <th>Tahun Bulan</th>
        <th>Meteran Bulan Lalu</th>
        <th>Meteran Bulan Sekarang</th>
        <th>Tarif Dasar</th>
        <th>Jenis Langanan</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($tagihan as $t)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$customer->firstWhere('Id', $pelanggan->firstWhere('id', $t->Id_pelanggan)->Id_customer)->nama}}</td>
                <td>{{$t->Tahun_bulan}}</td>
                <td>{{$t->Meteran_bulan_lalu}}</td>
                <td>{{$t->Meteran_bulan_sekarang}}</td>
                <td>{{$t->Tarif_dasar}}</td>
                <td>{{$jenis_langganan->firstWhere('id', $t->Id_jenis_langganan)->nama}}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="/admin/tagihan/edit/{{ $t->id }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/admin/tagihan/delete/{{ $t->id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection
