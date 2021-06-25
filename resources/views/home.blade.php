@extends('layouts.pengguna')

@section('nav')
<a class="navbar-brand" href="{{ url('/pengguna') }}">
    {{ Auth::user()->name }}
</a>
@endsection

@section('konten')
<div>
    <h2>Daftar Tagihan</h2>

</div><br>

<div class="container">
    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Tahun Bulan</th>
            <th>Meteran Bulan Lalu</th>
            <th>Meteran Bulan Sekarang</th>
            <th>Jenis Langanan</th>
            <th>Tarif Dasar</th>
            <th>Total tagihan</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($data as $d)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$d->Tahun_bulan}}</td>
                    <td>{{$d->Meteran_bulan_lalu}}</td>
                    <td>{{$d->Meteran_bulan_sekarang}}</td>
                    <td>{{$jenis_langganan->firstWhere('id', $d->Id_jenis_langganan)->nama}}</td>
                    <td>{{$d->Tarif_dasar}}</td>
                    <td>{{$d->Tarif_dasar*($d->Meteran_bulan_sekarang-$d->Meteran_bulan_lalu)}}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#">Bayar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
</div>
@endsection
