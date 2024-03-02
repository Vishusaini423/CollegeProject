@extends('layouts.app')
@section('content')

@auth
<div class="log">
    <div class="name">
    <h2>Great to have you back, {{Auth::user()->name}}! Let's get started. </h2>
    </div>  
    <div class="cut">
            <button onclick="closeEntryl()"><i class="fa-solid fa-xmark"></i></button>
    </div>
</div>  
@else
<div class="entry">
        <div class="entryinner">
            <div class="entry_section">
            <form action="{{url('login')}}" method="post">
                @csrf
                    <p>Login to Daily delight</p>
                    <span>We're glad to see you again. Enjoy your time on our platform.</span><br><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" required><br><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required><br><br>
                    <button type="submit">Log in</button><br><br>
                    <h4>Don't have an accout ? <button onclick="changepage()">Register here</button></h4>
                </form> 
            </div>
            <div class="entry_img">
                <img src="assets/images/login.png" alt="">
            </div>
            <div class="cut">
            <button onclick="closeEntry()"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>
    </div>
</div>  

@endauth


<div class="extend" style="display:none;">
<div class="entryinner">
            <div class="entry_section">
            <form action="{{url('signin')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <p>Signup to Daily delight</p>
                    <span>Welcome to Daily Delight! We're excited to have you on board!</span><br><br>
                    <label for="name">Your name here</label><br>
                    <input type="text" name="name" id="name" required><br><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" required><br><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required><br><br>
                    <input type="file" name="image" id="image" style="display: none;">
                    <label id="image-label" for="image"><i class="fa-regular fa-image" ></i> Select your profile photo</label><br><br>   
                    <button type="submit">Sign Up</button><br><br>
                </form> 
            </div>
            <div class="entry_img">
                <img src="assets/images/login.png" alt="">
            </div>
            <div class="cut">
            <button onclick="closeEntry()"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>
</div>

<!-- home section starts  -->
<section class="home" id="home">


    <div class="content">
        <h3>Celebrate Your Senses</h3>
        <p>Welcome to Daily Delight.... "The Royal Court", over the centuries Indian cuisine has been influenced by many cultures.Daily Delight takes the best according to your mood and bring you a "memory".</p>
        <a href="#order" class="btn">Order Now</a>
    </div>
    <div class="image">
        <img src="assets/images/home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="speciality">

    <h1 class="heading"> our <span>speciality</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="assets/images/s-img-1.jpg" alt="">
            <div class="content">
                <img src="assets/images/s-1.png" alt="">
                <h3>Chicken Biryani</h3>
                <p>Chicken Dum Biryani is the technique of cooking helps to make the recipe much more delicious because the closing accomplishes maturing.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="assets/images/s-img-2.jpg" alt="">
            <div class="content">
                <img src="assets/images/s-2.png" alt="">
                <h3>Posto Pizza</h3>
                <p>italian mix with indian touch, our newly designed posto pizza will touch your heart.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="assets/images/s-img-3.jpg" alt="">
            <div class="content">
                <img src="assets/images/s-3.png" alt="">
                <h3>Raclette burger</h3>
                <p> bite into this delecioud and juicy cheeseburger with melted american cheese, fresh tomato, crisp lettuce and onions. </p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="assets/images/s-img-4.jpg" alt="">
            <div class="content">
                <img src="assets/images/s-4.png" alt="">
                <h3>Cappuccino</h3>
                <p>a hot beverage consisting of espresso and foamed milk, often served with powdered cinnamon and topped with whipped cream, will refresh you.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="assets/images/s-img-5.jpg" alt="">
            <div class="content">
                <img src="assets/images/s-5.png" alt="">
                <h3>Dessert</h3>
                <p>king of dessert 'gulab jamun' is the way to 'happy ending'.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="assets/images/s-img-6.jpg" alt="">
            <div class="content">
                <img src="assets/images/s-6.png" alt="">
                <h3>Ice Cream</h3>
                <p>make yor mouth frezzy with spectacular taste of different flavour. eat and feel cooooolll...</p>
            </div>
        </div>

    </div>

</section>

<!-- speciality section ends -->

<!-- popular section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> everyone's <span>favourite</span>  </h1>

    <div class="box-container">

        <div class="box">
            <span class="price"> Spicy </span>
            <img src="assets/images/p-1.jpg" alt="">
            <h3> Dum Biryani</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
           
        </div>
        <div class="box">
            <span class="price"> Veg Special </span>
            <img src="assets/images/p-2.jpg" alt="">
            <h3>Butter Paneer</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>

        </div>
        <div class="box">
            <span class="price">Bihar Special </span>
            <img src="assets/images/p-3.jpeg" alt="">
            <h3>Litti Chokha</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> Hot </span>
            <img src="assets/images/p-4.jpg" alt="">
            <h3>Chicken Lollipop</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> Beverage </span>
            <img src="assets/images/p-5.jpg" alt="">
            <h3>Coffee</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price">Healthy </span>
            <img src="assets/images/p-6.jpg" alt="">
            <h3>Salad</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>

    </div>

</section>

<!-- popular section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> have a look to our  <span> world </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="assets/images/g-1.jpg" alt="">
            
        </div>
        <div class="box">
            <img src="assets/images/g-2.jpg" alt="">

            <div class="content">
                
            </div>
        </div>
        <div class="box">
            <img src="assets/images/g-3.jpg" alt="">
            
        </div>
        <div class="box">
            <img src="assets/images/g-4.jpg" alt="">
            
        </div>
        <div class="box">
            <img src="assets/images/g-5.jpg" alt="">
            
        </div>
        <div class="box">
            <img src="assets/images/g-6.jpg" alt="">
            
        </div>
        <div class="box">
            <img src="assets/images/g-7.jpg" alt="">
            
        </div>
        <div class="box">
            <img src="assets/images/g-8.jpg" alt="">
            
        </div>
        
        </div>

    </div>

</section>

<!-- gallery section ends -->



<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> about <span>us</span> </h1>

    <div class="box-container">

        <div class="box">
           
            <p>Daily Delight opened in Mumbai, then Bombay, in 1993, giving birth to the country’s first harbour landmark. This legendary 5 star hotel in Mumbai has played host to kings, dignitaries and eminent personalities from across the globe, and is acknowledged as a world leader in hospitality. Each of the rooms 285 rooms & suites are a striking blend of nostalgic elegance, rich history and modern facilities. Strategically located in Mumbai’s prime historical and commercial hub, The Quartz is walking distance from Colaba Causeway, known for its touristy tiny roadside shops. The city’s financial hub, parliament, stadium, offices and shopping districts are all located within close proximity; as is a flourishing art and heritage precinct with must visit museums, art galleries, churches and synagogues.</p>
        </div>
        
        

    </div>

</section>

<!-- review section ends -->

<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading">book a <span>meal</span> now</h1>

    <div class="row">
        
        <div class="image">
            <img src="assets/images/order-img.jpg" alt="">
        </div>
        @auth
        <form action="{{url('book_meal')}}" method="post">
        @csrf
            <div class="inputBox">
                <input type="text" placeholder="Name" name="username" id="username">
                <input type="email" placeholder="Email" name="email" id="email" >
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Contact Number" name="number" id="email">
                <input type="text" placeholder="Landmark" name="landmark" id="landmark">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Enter name of dish" name="dish" id="dish">
                <input type="number" placeholder="Quantity" name="quantity" id="quantity">
                <input type="text" placeholder="Address" name="address" id="address">
            </div>
            <button class="btn" type="submit">Order Now</button>
        </form>
        @else
        <form action="{{url('book_meal')}}" method="post">
        @csrf
            <div class="inputBox">
                <input type="text" placeholder="Name" name="username" id="username" disabled>
                <input type="email" placeholder="Email" name="email" id="email" disabled>
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Contact Number" name="number" id="email" disabled>
                <input type="text" placeholder="Landmark" name="landmark" id="landmark"disabled>
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Enter name of dish" name="dish" id="dish" disabled>
                <input type="number" placeholder="Quantity" name="quantity" id="quantity" disabled>
                <input type="text" placeholder="Address" name="address" id="address" disabled>
                <button class="btn" type="submit" disabled> Order Now</button > 
            </div>
            <div class="inputbox">
                <h2 style="color:red"> Indulge in culinary bliss! Log in to order your meal now and let the feast begin!</h2>
            </div>
        </form>
        @endauth

    </div>

</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
    document.querySelector('.entry').style.display = 'block'; 
  }, 2000); 
});

function closeEntry() {
  document.querySelector('.entry').style.display = 'none';
}

function closeEntryl() {
  document.querySelector('.log').style.display = 'none';
}

function changepage() {
    document.querySelector('.entry').innerHTML = '';
    document.querySelector('.entry').innerHTML =document.querySelector('.extend').innerHTML;
}

</script>

@endsection