@extends('layouts.app')

@section('title')
Details
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Employees Details</h1>
        <table class="table table-striped">
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
                <tr>
                    <td>{{$employees->id}}</td>
                    <td>{{$employees->first_name}} {{$employees->last_name}}</td>
                    <td>{{$employees->email}}</td>
                    <td>{{$employees->job_title}}</td>
                    <td>{{$employees->city}}</td>
                    <td>{{$employees->country}}</td>
                    <td>
                        <a href="/edit/{{$employees->id}}"><span class="btn btn-primary">Edit</span></a>
                    </td>
                    <td>
                        <a href="/delete/{{$employees->id}}"><span class="btn btn-danger">Delete</span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    <div>
</div>
@endsection