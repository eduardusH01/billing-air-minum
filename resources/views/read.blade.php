@extends('layouts.app')

@section('nav')
<a class="navbar-brand" href="{{ url('/') }}">
    Admin
</a>
@endsection

@section('content')
    <h1>Users</h1>
    @if(count($users)>0)
        @foreach($users as $user)
            <div class="well">
                <h3>{{$user->name}}</h3>
            </div>
        @endforeach
    @else
        <p>No Users Found</p>
    @endif
@endsection
