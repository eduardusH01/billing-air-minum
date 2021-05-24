@extends('layouts.admin')

@section('konten')
<div>
    <a href="/admin/customers/create" class="btn btn-primary btn-md">Tambah Customer Baru</a>
</div><br>
<table class="table table-bordered">
    <thead>
        <th>Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Id Kelurahan</th>
        <th>Id Kecamatan</th>
        <th>Id Kabupaten</th>
        <th>Id Provinsi</th>
        
        <th>Kode Pos</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->Id}}</td>
                <td>{{$customer->nama}}</td>
                <td>{{$customer->alamat}}</td>
                <td>{{$customer->Id_kelurahan}}</td>
                <td>{{$customer->Id_kecamatan}}</td>
                <td>{{$customer->Id_kabupaten}}</td>
                <td>{{$customer->Id_provinsi}}</td>
                <td>{{$customer->Kode_pos}}</td>
                <td>
                    <a class="btn btn-sm btn-warning float-left">Edit</a>
                    @can('delete customer')
                    <a class="btn btn-sm btn-danger float-left" href="/admin/customers/delete/{{ $customer->Id }}">Hapus</a>
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection
