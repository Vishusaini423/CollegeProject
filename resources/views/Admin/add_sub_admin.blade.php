@extends('layouts.app')
@section('content')
<style>
.entryinner
{
  display: flex;
  margin-top:100px
}

.entryinner h2
{
  margin-top: 20px;
  margin-left: 20px;
}

.entry_section{
  display:block;
  color: black;
  padding-top: 30px;
  padding-left: 30px;
  padding-bottom: 30px;
  width: 100%;
}

.entry_section p{
  font-weight: bolder;
  font-size: 30px;
}


.entry_section label{
  margin-bottom: 7px;
  font-size:20px;
  font-family:verdana;
}

.entry_section input{
  background:rgb(139, 22, 22,0.3);
  padding-left: 15px;
  height: 30px;
  margin-top:10px;
  border-radius:20px;
  width:250px;
}

.entry_section button{
  margin-top:20px;
  font-size:20px;
}

.entry_section span{
  font-size:16px;
}

.entry_section button:hover{
  background-color: rgb(139, 22, 22);
  color: wheat;
  border-radius: 20px;
  padding: 7px;
  font-size: 20px;
}
</style>
<div class="extend" style="margin">
<div class="entryinner">
            <div class="entry_section">
            <form action="{{url('signin_sub')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <p>Add Sub Admin to Daily delight</p>
                    <span>Welcome to Daily Delight! We're excited to have one more sub admin to our group !</span><br><br>
                    <label for="name">Enter Sub Admin's name here</label><br>
                    <input type="text" name="name" id="name"><br><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email"><br><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password"><br><br>
                    <input type="file" name="image" id="image" style="display: none;">
                    <label id="image-label" for="image"><i class="fa-regular fa-image"></i> Select Sub Admin's profile photo</label><br><br>   
                    <button type="submit">Add Sub Admin</button><br><br>
                </form> 
            </div>
        </div>
</div>
 
@endsection
