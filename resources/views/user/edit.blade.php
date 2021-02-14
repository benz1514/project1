@extends('layout.master')
@section('content')
<h1>กรุณากรอกข้อมูล</h1>
<form action="/user/update/{{$user->id}}" method="post">
    @csrf
ชื่อ
<input type="text" name="name" value="{{$user->name}}" required>
Username
<input type="text" name="username" value="{{$user->username}}" required>
Email
<input type="text" name="email" value="{{$user->email}}" required>
Password
<input type="text" name="password" value="{{$user->password}}" required>
<button type="submit">บันทึก</button>




</form>
@endsection
