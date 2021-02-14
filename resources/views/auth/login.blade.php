@extends('layout.master')
@section('content')
<h1>กรุณากรอกข้อมูล</h1>
<form action="/auth/doLogin" method="post">
    @if ($errors->any())
    @foreach($errors->all() as $item)
    {{$item}}
    @endforeach
    @endif

    @csrf
อีเมล์ |<input type="email" name="email" required>
รหัสผ่าน |<input type="password" name="password" required>

<button type="submit">บันทึก</button>




</form>
@endsection
