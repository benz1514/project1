@extends('layout.master')
@section('content')
<h1>กรุณากรอกข้อมูล</h1>
<form action="/user/delete/{{$user->id}}" method="delete">
    @csrf
<input type="text" name="name" value="{{$user->name}}" required>
<button type="submit">บันทึก</button>




</form>
@endsection
