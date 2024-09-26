<a href="/reports/create"></a>
@extends('layouts.app')
@section('content')
@if(count($reports)>0)
<table class="table table-dark table-hover">
    <thead>
        <th>Report Title</th>
        <th>Report Description</th>
        <th>Report Priority</th>
        <th>Action 1</th>
        <th>Action 2</th>
        <th>Action 3</th>
    </thead>
        <tbody>
            @foreach($reports as $report)
            <tr>
                <td>{{$report->title}}</td>
                <td>{{$report->descrption}}</td>
                <td>{{$report->priority}}</td>
                <td><a href="/reports/{{$report->id}}" class="btn btn-primary">Details</a></td>
                <td><a href="/reports/{{$report->id}}/edit" class="btn btn-warning">Edit</a></td>
                <td><form action="/reports/{{$report->id}}" method="POST">@csrf @method('Delete')
                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')"></form></td>
            </tr>
            @endforeach
        </tbody>
        @else
No Data
@endif
@endsection