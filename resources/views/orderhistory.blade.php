@extends('layouts.app')
@section('content')
<style>
table
{
  width: 100%;
  background-color: wheat;
}

table tr{
  height: 45px;
  font-size: 15px;
  border:solid black 1px
}
table td,th{
  padding-left: 20px;
}
.name{
  margin-top:100px;
  width: 100%;
  border-bottom: 10px solid black;
  font-size:55px;
  padding-left:39%;
  background-color:wheat;
}

h4{
    font-size:20px;
    font-family: "Lucida Console", "Courier New", monospace;
    padding-left:20px;
    padding-right:20px;
    padding-top:30px;
    padding-bottom:30px;
}
</style>   
<p class="name">Order History</p>
<table>
    <tr>
        <th>Sr No</th>
        <th>name</th>
        <th>dish_name</th>
        <th>quantity</th>
        <th>Address</th>
        <th>Order date and time</th>
    </tr>
    @foreach($data as $da)
    <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$da->name}}</td>
            <td>{{$da->dish_name}}</td>
            <td>{{$da->quantity}}</td>
            <td>{{$da->address}}</td>
            <td>{{$da->created_at}}</td>
        </tr>
        @endforeach
</table>
<h4>
    
"Thank you for your recent order! Your support means the world to us. We hope you're enjoying your purchase. If you loved what you received, why not consider ordering more? We're constantly updating our inventory with exciting new products that we're sure you'll love just as much. Thanks again for choosing us, and we look forward to serving you again soon!"
</h4>

@endsection