@extends('layouts.app')
@section('content')
<style>
.con{
    height:fit-content;
    display:flex;
    margin-top:100px;
    display: flex;
    flex-wrap: wrap;
}
.conin{
    padding-left:20px;
    margin-top:40px;
    height:260px;
    margin-bottom:40px;
    margin-left:20px;
}
.conin button{
    decoration:none;
    width:100%;
    height:100%;
    font-size:20px;
    background:none;
    margin-top:15px;
    font-family:verdana;
}
.card{
    display:block;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    width:250px;
    height:260px; 
    padding:15px;  
    background-color:rgb(139,22,22,0.2);     
}
.card:hover{
    background-color:rgb(139,22,22,0.5); 
}
.card img{
    height:150px;
    width:100%;
    border-radius:5px;
}
.card h1{

}

</style>
<div class="con">
    @foreach($data as $da)
    <div class="conin">
            <div class="card">
                <form action="{{url('getfood')}}" method="post">
                    @csrf
                    <img src="{{ asset('img/' . $da->images) }}" alt="">
                    <input type="text" value="{{$da->id}}" name="category" style="display:none;">
                    <button type="submit">{{$da->name}}</button>
                </div>
        </form>
    </div>
    @endforeach
</div>
@endsection