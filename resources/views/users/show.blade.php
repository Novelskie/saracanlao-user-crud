@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View User</h1>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="{{ $user->email }}" disabled>
        </div>

        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection