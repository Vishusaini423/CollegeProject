@extends('layouts.app')
@section('content')
<style>
.user_data{
    margin-top:40px;
    
}
table{
    width:100%;
    
}
tr{
    border-bottom:2px solid black;
    height:40px;
}
td,th{
    padding-left:25px;
    font-size:15px;
}
h1
{
    margin-top:120px;
    margin-left:45.5%;
    font-family:verdana;
}
</style>
<h1>User's Data</h1>
<div class="user_data">
    <table>
        <tr>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>type</th>
        </tr>
        @foreach($data as $da)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><b>{{$da->name}}</b></td>
            <td>{{$da->email}}</td>
            @if($da->type == 1)
                <td style="color:green;"><b>Admin</b></td>
            @elseif($da->type==2)
                <td>Sub Admin</td>
            @else
                <td>General User</td>
            @endif
        </tr>
        @endforeach
    </table>
</div>
@endsection