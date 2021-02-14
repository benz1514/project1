@extends('layout.master')
@section('content')
<h1>กรุณากรอกข้อมูล</h1>
<form action="/user/store" method="post">
    @csrf
    ชื่อ
<input type="text" name="name" required><br>
usermame
<input type="text" name="username" required><br>
email
<input type="email" name="email" required><br>
passwords
<input type="password" name="password" required><br>
<button type="submit">บันทึก</button>




</form>
@endsection
