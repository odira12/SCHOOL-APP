@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <a href="{{ route('admin.users') }}">Manage Users</a>
    </div>
@endsection
