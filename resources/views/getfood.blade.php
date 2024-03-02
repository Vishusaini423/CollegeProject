@extends('layouts.app')
@section('content')
<style>
.con{
    margin-top:100px;
    padding-top:40px;
}
.conin{
    display:block;
    display:flex;
    flex-wrap:wrap;
    margin-bottom:40px;
}
.con h1{
    margin-left:47%
}
.card{
    display:block;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    width:250px;
    height:100px; 
    padding:15px;  
    background-color:rgb(139,22,22,0.2);  
    margin-bottom:20px;
    margin-left:15px;
}
.card img{
    height:150px;
    width:100%;
    border-radius:5px;
}
.card h3{
    font-weight:bolder;
    font-family: Garamond;
}
.card s{
  text-decoration: line-through;
}

.cate{
    background-repeat:no-repeat;
    height: 200px;;
    background-size: cover;
    width:300px;
    margin-left:40%;
    margin-bottom:40px;
    margin-top:10px;
    border-radius:50%;
    box-shadow: -15px -10px 30px black;
    color:white;
}
.cate h1
{
    background:rgb(139,22,22,0.6);
    padding-left:15px; 
}

.fa-solid{
    margin-left:120px;
    font-size:25px;
}

.fa-solid:hover{
    color:green;
}
.card button{
    decoration:none;
    background:none;
    width:fit-content;
}
</style>
<div class="con">
    @foreach($data as $category)
    <div class="cate" style="background-image: url('{{ asset('img/' . $category['image']) }}');">
        <h1 >{{$category['name']}}</h1>
    </div>
    <!-- <img src="{{ asset('img/' . $category['image']) }}" alt=""> -->
    <div class="conin">
            @foreach($category['foods'] as $food)
            <div class="card">
                    <h3>{{$food['name']}}</h3>
                    <h4>{{$food['discount_price']}} <a href=""><button><i class="fa-solid fa-cart-shopping"></i></button></a></h4>
                    @if($food['price']!=$food['discount_price'])
                    <h5><s>{{$food['price']}}</s></h5>
                    @endif
                    
                </div>
                @endforeach
            </div>
        @endforeach
</div>


@endsection