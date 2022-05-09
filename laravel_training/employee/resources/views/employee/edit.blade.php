@extends('layouts.app')
@section('title')
Edit Employee
@endsection
@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Employee</h1>
        <form action="/update/{{$employees->id}}" method="post" class="mt-4 p-4">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$employees->first_name}}"/>
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$employees->last_name}}"/>
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$employees->email}}"/>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$employees->city}}"/>
                @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{$employees->country}}"/>
                @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="job_title">Job Title:</label>
                <input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{$employees->job_title}}"/>
                @error('job_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group m-3">
                <input type="submit" class="btn btn-primary float-end" value="Submit">
            </div>
        </form>
    </div>
</div>

@endsection
