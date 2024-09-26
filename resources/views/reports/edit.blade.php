@extends('layouts.app')
@section('content')
<table class="table table-success table-striped">
<h3>Edit Report Form</h3>
<form action="/reports/{{$report->id}}" method="POST" class="form-control">
    @csrf
    @method('put')
    Title : <input type ="text", value ="{{$report->title}}" name ="title" class="form-control"><br>
    Description : <textarea name="description" class="form-control">{{$report->description}}</textarea><br>
        Priority: <select name="priority" class="form-control"><option value="{{$report->priority}}">{{$report->priority}}</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <input type="submit" value="Update" onclick="return confirm ('Kamu Pasti?')" class="btn btn-success">
        <input type="Reset" value="Cancel" class="btn btn-danger"><br>
    </form>
    @endsection