@extends('layouts.admin')

@section('konten')
<div>
    <h2>Tabel Customer</h2>
</div><br>
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Id User</th>
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
        <?php $no = 1 ?>
        @foreach($customers as $customer)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$customer->Id_user}}</td>
                <td>{{$customer->nama}}</td>
                <td>{{$customer->alamat}}</td>
                <td>{{$customer->Id_kelurahan}}</td>
                <td>{{$customer->Id_kecamatan}}</td>
                <td>{{$customer->Id_kabupaten}}</td>
                <td>{{$customer->Id_provinsi}}</td>
                <td>{{$customer->Kode_pos}}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="/admin/customers/edit/{{ $customer->Id }}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/admin/customers/delete/{{ $customer->Id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection
