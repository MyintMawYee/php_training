@extends('layouts.app')

@section('title')
Create Todo
@endsection

@section('content')

<form action="/store-data" method="post" class="mt-4 p-4">
@csrf
    <div class="form-group m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter title..." name="name" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Enter description..." rows="3">{{ old('description') }}</textarea>
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>

@endsection
