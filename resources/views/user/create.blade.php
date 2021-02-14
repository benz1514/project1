@extends('layout.master')
@section('content')
<h1>กรุณากรอกข้อมูล</h1>
<form action="/user/store" method="post">
    @csrf
    ชื่อ
<input type="text" name="name" required>
usermame
<input type="text" name="username" required>
email
<input type="text" name="email" required>
passwords
<input type="text" name="password" required>
<button type="submit">บันทึก</button>




</form>
@endsection
