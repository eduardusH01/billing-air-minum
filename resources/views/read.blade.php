@extends('layouts.app')

@section('nav')
<a class="navbar-brand" href="{{ url('/') }}">
    Admin
</a>
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@endsection
