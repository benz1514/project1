@extends('layout.master')
@section('content')
<h1>ข้อมูลสามชิก</h1>
<a href="/post/create">+เพิ่มข่าวใหม่</a>
<table>
    <thead>
        <tr>
            <td>ลำดับ</td>
            <td>หัวข้อข่าว</td>
            <td>รูปประจำข่าว</td>
            <td> หมวดหมู่</td>
        <td>ผู้เขียนข่าว</td>
        <td>สร้างเมื่อ</td>
        <td>จัดการ</td>

        </tr>
    </thead>
    <tbody>
        @foreach($post as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->thumnail}}</td>
            <td>{{$item->category_id}}</td>
            <td>{{$item->user_id}}</td>
            <td>{{$item->created_at}}</td>
            <td><a href="/post/edit/{{$item->id}}">แก้ไข</a> |<a href="/post/delete/{{$item->id}}"> ลบ</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
