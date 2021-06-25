@extends('layouts.admin')

@section('konten')
<div>
    <h2>Tabel User</h2>
</div><br>
<table class="table table-bordered">
    <thead>
        <th>Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role == 'user' ? 'customer' : $user->role}}</td>
                <td>
                    <!-- <a class="btn btn-sm btn-success" href="/admin/customers/create/{{ $user->id }}">Jadikan Customer</a> -->
                    <!-- <a class="btn btn-sm btn-warning" href="/admin/users/edit/{{ $user->id }}">Edit</a> -->
                    <a class="btn btn-sm btn-danger" href="/admin/users/delete/{{ $user->id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection
