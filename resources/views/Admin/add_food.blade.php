@extends('layouts.app')
@section('content')
<style>
body{
    background:url({{ asset('assets/images/bg.jpg') }});
    background-repeat:no-repeat;
    background-size: cover;
}
.adder{
    padding-left:20px;
    margin-top: 100px;
    height:fit-content;
    display:block;
    font-family:verdana;
    padding-top:20px;
    /* background-image: url({{ asset('assets/images/bg.jpg') }}); */
;
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
    margin-top:30px;
    border:2px solid black;
    border-radius:5px;
    width:170px;
    padding-right:13px;
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
    padding-top:20px;
}
.adderinnerleft {
    display:block;
    width:30%;
}
.adderinnnerright{
    width:50%;
    display:block;
}
.adderinner pre{
    height:100px;
}

</style>
<div class="adder">
    <h1 >Add food sub category</h1> 
    @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <form action="{{url('add_food')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="adderinner">  
            <div class="adderinnerleft">
                <pre>
                    <label for="category">Select the food category</label>
                    <select name="category" id="category" onchange="getsubc()" required >
                    <option value="">-- Select --</option>
                        @foreach($data as $da)
                            <option value="{{$da->id}}">{{$da->name}}</option>
                        @endforeach
                    </select>   
                </pre>
                <pre>
                    <label for="subc">Select Sub Category</label><br>
                    <select name="subc" id="subc" required>
                            <option value="" selected>Select Category first</option>
                    </select>   
                </pre>
                <pre>
                <label for="costing_type">Choose costing type</label>
                    <select id="costing_type" name="costing_type">
                        <option value="/plate">Per Plate</option>
                        <option value="/kg">Per kg</option>
                        <option value="/peiece">Per peiece</option>
                    </select>
                </pre>
            </div>  
            <div class="adderinnerright">
                <pre>
                    <label for="name"> Enter the name of food item</label>
                    <input type="text" name="name" id=name required>    
                </pre>
                <pre>
                    <label for="price">Enter the price of the food item</label>
                    <input type="number" name="price" id="price" required>     
                </pre>
                <pre>
                    <label for="">Discount price</label>
                    <input type="text" name="discount_price">
                </pre>
                <pre>
                    <button type="text"> Add food Item</button>
                </pre>
            </div>
        </div>
    </form>
</div>
<script>

    function getsubc() {
        let a = $('#category').val();
        console.log(a);
        $.ajax(
        {
            url: "{{ url('getit') }}/" + a,
            type: "get",
            data: {},
            dataType: "json",       
            success: function(res) 
            {
                var select = document.getElementById('subc');
                select.innerHTML = '';
                for (var i = 0; i < res.length; i++) 
                {
                    var option = document.createElement('option');
                    option.value = res[i].id;
                    option.text = res[i].name;
                    select.appendChild(option);
                }
            }
        });
    }

</script>
@endsection