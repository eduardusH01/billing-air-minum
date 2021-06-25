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
        <th>Customer</th>
        <th>Jenis</th>
        <th>Tahun Bulan</th>
        <th>Meteran bln skrng</th>
        <th>Meteran bln lalu</th>
        <th>Tarif Dasar</th>
        <th>Total tagihan</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($data as $t)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$t->customer}}</td>
                <td>{{$t->nama}}</td>
                <td>{{$t->Tahun_bulan}}</td>
                <td>{{$t->Meteran_bulan_sekarang}}</td>
                <td>{{$t->Meteran_bulan_lalu}}</td>
                <td>{{$t->Tarif_dasar}}</td>
                <td>{{$t->Tarif_dasar * ($t->Meteran_bulan_sekarang-$t->Meteran_bulan_lalu)}}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="/admin/tagihan/edit/{{ $t->id }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/admin/tagihan/delete/{{ $t->id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection
