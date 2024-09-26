@extends('layouts.app')
@section('content')
<h1>Report Details</h1>
        Report Title : {{$report->title}}<br>
        Report Description : {{$report->description}}<br>
        Report Priority : {{$report->priority}}<br>
        <small><br>Created at : {{$report->created_at}}</small>
        <small><br>Updated at : {{$report->updated_at}}</small>
@endsection
        