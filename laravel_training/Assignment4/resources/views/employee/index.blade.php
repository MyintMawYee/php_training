@extends('layouts.app')
@section('title')
Employee
@endsection
@section('content')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
<div class="row mt-3">
    <div class="col-12 align-self-center">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Job Title</td>
                    <td>City</td>
                    <td>Country</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody> 
                @foreach ($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->job_title}}</td>
                    <td>{{$employee->city}}</td>
                    <td>{{$employee->country}}</td>
                    <td>
                        <a href="/edit/{{$employee->id}}"><span class="btn btn-primary btn-sm">Edit</span></a>
                        <a href="/delete/{{$employee->id}}"><span class="btn btn-danger btn-sm">Delete</span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection