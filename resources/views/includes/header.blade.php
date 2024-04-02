<!-- header section starts  -->
<header>

    <a href="#" class="logo"></i><p>꧁༺ 𝓓𝓪𝓲𝓵𝔂 𝓓𝓮𝓵𝓲𝓰𝓱𝓽 ༻꧂</p></a>

    <div id="menu-bar"></div>

    <nav class="navbar">
        <a href="{{url('homepage')}}#home">home</a>
        <a href="{{url('homepage')}}#speciality">speciality</a>
        <a href="{{url('homepage')}}#popular">popular</a>
        <a href="{{url('homepage')}}#gallery">gallery</a>
        <a href="{{url('homepage')}}#review">review</a>
        <a href="{{url('content')}}">Order Now</a>
        @if(Auth::check())   
        <form action="">
            <div class="dropdown">
            @auth
            <a href="" class="dropbtn" style="margin-right:120px;">
            @if(auth()->user()->image)
                <img src="{{ asset('img/' . auth()->user()->image) }}" alt="">
            @else
                <img src="{{ asset('default_image.jpg') }}" alt="Default Image">
            @endif</a>
            @endauth

                <div class="dropdown-content">
                    @if(Auth()->user()->type == 1)
                        <button style="margin-top:15px;"><a href="{{url('admin_main')}}" >Admin Panel</a></button>
                        <button><a href="{{url('logout')}}">Log Out</a></button>
                    @else
                    <button><a href="">Profile</a></button>
                    <button><a href="{{ url('order_history') }}/{{ auth()->user()->email }}">Order History</a></button>
                    <button><a href="{{url('cart')}}">Cart</a></button>
                    <button><a href="{{url('logout')}}">Log Out</a></button>
                    @endif
                </div>
            </div>
        </form>
        @endif
        @if(!Auth::Check())
        <a href=""><button style="background:none; color:white; padding-left:10px; padding-right:10px; margin-right:120px; font-size:18px; ">Login / Signin</button></a>
        @endif
        
    </nav>   
</header>



<!-- header section ends -->    
