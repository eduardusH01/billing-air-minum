@extends('layouts.admin')

@section('konten')
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
                    <a class="btn btn-sm btn-warning">Edit</a>
                    <a class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection
