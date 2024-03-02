@extends('layouts.app')
@section('content')
<style>
.adder{
    margin-left:20px;
    margin-top: 100px;
    height:250px;
    display:block;
    font-family:verdana;
    padding-top:20px;
    border-radius:50px;
}
.adder h1
{
  padding-bottom:30px;
  font-weight:bolder;
  font-size:30px;
  margin-left:38%;
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
    border:2px solid black;
    border-radius:5px;
    width:170px;
    background:rgb(139,22,22,0.3);
    height:40px;
}
.adder button:hover{
  background-color: rgb(139, 22, 22);
  color: wheat;
  border-radius:20px;
  font-size: 20px;
}

.adder select{
    width:200px;
    font-size:18px;
}
.adderinner{
    display:flex;
}

</style>
<div class="adder">
    <h1 >Add food sub category</h1> 
    @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <form action="{{url('add_sub_category')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="adderinner">
            <pre>
                <label for="category">Select the food category</label><br>
                <select name="category" id="category">
                    <option value="" selected>Select Category</option>
                    @foreach($data as $da)
                        <option value="{{$da->id}}">{{$da->name}}</option>
                    @endforeach
                </select><br>
            </pre>
            <pre>
                <label for="name"> Enter the name of food item</label><br>
                <input type="text" name="name" id=name>
            </pre>
            <pre>
            <label id="image-label" for="image"><i class="fa-regular fa-image"></i> Upload Food item's select</label>
            <input type="file" name="image" id="image" style="display: none;">
            <button>Add food Item</button>
            </pre>      
        </div>
    </form>

</div>
@endsection