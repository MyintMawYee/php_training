@extends('layouts.app')

@section('title')
Create Employee
@endsection

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a Employee</h1>
        <form method="post" action="/store-data">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}"/>
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="Enter your last name" value="{{ old('last_name') }}"/>
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}"/>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="city" placeholder="Enter your city" value="{{ old('city') }}"/>
                @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" id="country" placeholder="Enter your country" value="{{ old('country') }}"/>
                @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="job_title">Job Title:</label>
                <input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" id="job_title" placeholder="Enter your job title" value="{{ old('job_title') }}"/>
                @error('job_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group m-3">
                <button type="submit" class="btn btn-primary float-end">Create</button>
            </div>
        </form>
    </div>
</div>

@endsection
