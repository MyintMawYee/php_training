@extends('layouts.app')
@section('title')
Employee
@endsection
@section('content')

<div class="row mt-3">
    <div class="col-12 align-self-center">
        <ul class="list-group">
            @foreach($employees as $employee)
            <li class="list-group-item"><a href="details/{{$employee->id}}" style="color: cornflowerblue">{{$employee->first_name}} {{$employee->last_name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
