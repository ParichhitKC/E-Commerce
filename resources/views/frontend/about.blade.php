
@extends('layouts.front')
@section('content')
<section id="header">



    <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>

</section>

<section id="page-header" class="about-header">
    <h2>#knowUs</h2>
    <p>Let's get connected!! Be part of our family.</p>
</section>

<section id="about-head" class="section-p1">
    <img src="./assets/img/about/a6.jpg" alt="">
    <div>
        <h2>Who We Are?</h2>
        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat itaque officia ex debitis rem ut,
            illum, accusantium impedit soluta modi expedita nemo dolore blanditiis vero optio sed. Beatae, harum
            odit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat itaque officia ex debitis rem ut,
            illum, accusantium impedit soluta modi expedita nemo dolore blanditiis vero optio sed. Beatae, harum
            odit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat itaque officia ex debitis rem ut,
            illum, accusantium impedit soluta modi expedita nemo dolore blanditiis vero optio sed. Beatae, harum
            odit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat itaque officia ex debitis rem ut,
            illum, accusantium impedit soluta modi expedita nemo dolore blanditiis vero optio sed. Beatae, harum
            odit? </p>
    </div>

</section>

<section id="about-app" class="section-p1">
    <h1>Download Our <a href="#">App</a></h1>
    <div class="video">
        <video autoplay muted loop src="./assets/img/about/1.mp4"></video>
    </div>
</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="./assets/img/features/f1.png" alt="">
        <h6>Free Shipping</h6>
    </div>

    <div class="fe-box">
        <img src="./assets/img/features/f2.png" alt="">
        <h6>Online Order</h6>
    </div>

    <div class="fe-box">
        <img src="./assets/img/features/f3.png" alt="">
        <h6>Save Money</h6>
    </div>

    <div class="fe-box">
        <img src="./assets/img/features/f4.png" alt="">
        <h6>Promotions</h6>
    </div>

    <div class="fe-box">
        <img src="./assets/img/features/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>

    <div class="fe-box">
        <img src="./assets/img/features/f6.png" alt="">
        <h6>24/7 Support</h6>
    </div>

</section>
<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up for Newsletter</h4>
        <p>Get E-mail updates about our latest shop and <span>special offer.</span></p>
    </div>

    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="button-normal">Sign Up</button>
    </div>
</section>

@endsection
