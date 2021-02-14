@extends('layout.master')
@section('content')
<h1>กรุณากรอกข้อมูล</h1>
<form action="/category/delete/{{$category->id}}" method="delete">
    @csrf
<input type="text" name="name" value="{{$category->name}}" required>
<button type="submit">บันทึก</button>




</form>
@endsection
