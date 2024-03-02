@extends('layouts.app')
@section('content')
<style>
.adder{
    margin-left:20px;
    margin-top: 100px;
    padding-top:30px;
    height:200px;
}
.adder h1
{
  margin-top: 20px;
  font-weight:bolder;
  font-size:30px;
}

.entry_section p{
  font-weight: bolder;
  font-size: 30px;
}


.adder label{
  margin-bottom: 7px;
  font-size:20px;
}

.adder input{
  background:rgb(139, 22, 22,0.3);
  padding-left: 15px;
  height:38px;
  width:200px;
  border-radius:20px;
  font-size:20px;
}

.adder button{
    font-size:20px;
    padding:5px;
    /* border:2px solid black; */
    border-radius:5px;
    width:150px;
    background:rgb(139,22,22,0.3);
}
.adder button:hover{
  background-color: rgb(139, 22, 22);
  color: wheat;
  border-radius:20px;
  font-size: 20px;
}
table{
    width:100%;
    margin-top:100px;
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
    margin-left:40%;
    font-family:verdana;
}
</style>
<div class="adder">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h1>Add food category</h1>
    <form action="{{url('add_category')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Enter the food category</label><br>
        <input type="text" name="name" id="name"><br><br>
        <label id="image-label" for="image"><i class="fa-regular fa-image"></i> Upload Food item's select</label>
        <input type="file" name="image" id="image" style="display: none;"><br><br>
        <button type="submit">Add Category</button>
    </form>
</div>


<table>
    <tr>
        <th>Sr No.</th>
        <th> Category</th>
    </tr>
    @foreach($data as $da)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$da->name}}</td>
        </tr>
    @endforeach
</table>
@endsection()