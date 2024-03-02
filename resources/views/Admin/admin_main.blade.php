@extends('layouts.app')
@section('content')
<style>
body{
    background:none;
}
.cont{
    margin-top:115px;
    margin-left:20px;
    font-family: 'Nunito', sans-serif;
}
.cont h2{
    font-family:verdana;
    padding-left:20px;
    padding-top:20px;
    margin-bottom:15px;
}
.cont button{
    margin-left:30px;
}
</style>
<div class="cont">
<h2>Great to have you back, <b>{{Auth::user()->name}}!</b> Let's get started. </h2>
<a href="{{url('add_sub_admin')}}"><button class="btn">Add Sub Admin</button></a>
<a href="{{url('view_user')}}"><button class="btn">View Users</button></a>
<a href="{{url('add_category')}}"><button class="btn">Add Food Category</button></a>
<a href="{{url('add_sub_category')}}"><button class="btn">Add Food Sub Categories</button></a>
<a href="{{url('add_food')}}"><button class="btn">Add Food Items</button></a>
</div>      
@endsection