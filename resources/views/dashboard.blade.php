@extends('templates.layout')
@section('content')
<h1 style="text-align:center">Chào Mừng 
@if(Auth::check())
               {{ Auth::user()->name}}
               @else
               <a href="route('login')"></a>
                @endif
Đến Với Trang Quản Trị</h1>
@endsection