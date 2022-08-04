
@extends('layouts.front')
@section('content')
<section id="header">


    <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>

</section>

<section id="page-header" class="about-header">
    <h2>#let's_talk  </h2>
    <p>LEAVE A MESSAGE, We love to hear from you!</p>
</section>

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our agency locations or contact us today</h2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fa fa-map"></i>
                <p>56 Glassroad Street Glasgow G1 1UL New York</p>
            </li>

            <li>
                <i class="fa fa-envelope"></i>
                <p>something@gmail.com</p>
            </li>

            <li>
                <i class="fa fa-phone-alt"></i>
                <p>+123 123456789 </p>
            </li>

            <li>
                <i class="fa fa-clock"></i>
                <p>Monday - Friday : 9.00am to 17.00pm </p>
            </li>
        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.1247265307484!2d85.33385951438328!3d27.651612534547425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb175dbc7a5399%3A0x9a5d1bedd75af842!2sLittle%20Angels%20School!5e0!3m2!1sen!2snp!4v1651649642817!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section id="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="E-mail">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="button-normal">Submit</button>
    </form>

    <div class="people">
        <div>
            <img src="./assets/img/people/1.png" alt="">
            <p><span>John Doe</span> Senior Marketing Manager <br> Phone: +123 123456789 <br> Email: something@gmail.com</p>
        </div>

        <div>
            <img src="./assets/img/people/2.png" alt="">
            <p><span>William Smith</span> Senior Marketing Manager <br> Phone: +123 123456789 <br> Email: something@gmail.com</p>
        </div>

        <div>
            <img src="./assets/img/people/3.png" alt="">
            <p><span>Angelina Jolie</span> Senior Marketing Manager <br> Phone: +123 123456789 <br> Email: something@gmail.com</p>
        </div>

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
