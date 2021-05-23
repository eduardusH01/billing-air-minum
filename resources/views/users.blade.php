@extends('layouts.admin')

@section('konten')
<table class="table table-bordered">
    <thead>
        <th>Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                    <a class="btn btn-sm btn-warning">Edit</a>
                    <a class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection
