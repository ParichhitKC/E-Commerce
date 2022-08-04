@extends('layouts.front')
@section('content')
    <section id="content">
        <h4>Trade-in-offer</h4>
        <h1>Super value deals</h1>
        <h2>On all products</h2>
        <p>Save more with coupons & upto 50% off!</p>
        <button>Shop Now</button>
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

    <section id="product1" class="section-p1">
        <h2>Featured Parikshit</h2>
        <p>Summer collection New Modern Design</p>
        <div class="pro-container">
            @foreach($products as $product)
            <div class="pro">
                <img src="{{asset('images/'.$product->file)}}" alt="" style="height: 30vh;">
                <div class="des">
                    <span>{{$product->category->name}}</span>
                    <h5>{{$product->name}}</h5>

                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>${{$product->price}}</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            @endforeach
{{--            <div class="pro">--}}
{{--                <img src="./assets/img/products/f2.jpg" alt="">--}}
{{--                <div class="des">--}}
{{--                    <span>adidas</span>--}}
{{--                    <h5>Cartoon Astronaut T-shirts</h5>--}}
{{--                    <div class="star">--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <h4>78$</h4>--}}
{{--                </div>--}}
{{--                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>--}}
{{--            </div>--}}

{{--            <div class="pro">--}}
{{--                <img src="./assets/img/products/f3.jpg" alt="">--}}
{{--                <div class="des">--}}
{{--                    <span>adidas</span>--}}
{{--                    <h5>Cartoon Astronaut T-shirts</h5>--}}
{{--                    <div class="star">--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <h4>78$</h4>--}}
{{--                </div>--}}
{{--                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>--}}
{{--            </div>--}}

{{--            <div class="pro">--}}
{{--                <img src="./assets/img/products/f4.jpg" alt="">--}}
{{--                <div class="des">--}}
{{--                    <span>adidas</span>--}}
{{--                    <h5>Cartoon Astronaut T-shirts</h5>--}}
{{--                    <div class="star">--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <h4>78$</h4>--}}
{{--                </div>--}}
{{--                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>--}}
{{--            </div>--}}

{{--            <div class="pro">--}}
{{--                <img src="./assets/img/products/f5.jpg" alt="">--}}
{{--                <div class="des">--}}
{{--                    <span>adidas</span>--}}
{{--                    <h5>Cartoon Astronaut T-shirts</h5>--}}
{{--                    <div class="star">--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <h4>78$</h4>--}}
{{--                </div>--}}
{{--                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>--}}
{{--            </div>--}}

{{--            <div class="pro">--}}
{{--                <img src="./assets/img/products/f6.jpg" alt="">--}}
{{--                <div class="des">--}}
{{--                    <span>adidas</span>--}}
{{--                    <h5>Cartoon Astronaut T-shirts</h5>--}}
{{--                    <div class="star">--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <h4>78$</h4>--}}
{{--                </div>--}}
{{--                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>--}}
{{--            </div>--}}

{{--            <div class="pro">--}}
{{--                <img src="./assets/img/products/f7.jpg" alt="">--}}
{{--                <div class="des">--}}
{{--                    <span>adidas</span>--}}
{{--                    <h5>Cartoon Astronaut T-shirts</h5>--}}
{{--                    <div class="star">--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <h4>78$</h4>--}}
{{--                </div>--}}
{{--                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>--}}
{{--            </div>--}}

{{--            <div class="pro">--}}
{{--                <img src="./assets/img/products/f8.jpg" alt="">--}}
{{--                <div class="des">--}}
{{--                    <span>adidas</span>--}}
{{--                    <h5>Cartoon Astronaut T-shirts</h5>--}}
{{--                    <div class="star">--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                    <h4>78$</h4>--}}
{{--                </div>--}}
{{--                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>--}}
{{--            </div>--}}
        </div>
    </section>

    <section id="banner">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off</span> - All T-shirts and Accessories</h2>
        <button class="button-normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="./assets/img/products/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78$</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./assets/img/products/n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78$</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./assets/img/products/n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78$</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./assets/img/products/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78$</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./assets/img/products/n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78$</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./assets/img/products/n6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78$</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./assets/img/products/n7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78$</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./assets/img/products/n8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>78$</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deal</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="button-white">Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>spring/summer </h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="button-white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h3>SEASONAL SALE</h3>
            <span>Winter Collection - 50% OFF</span>
        </div>

        <div class="banner-box banner-box2">
            <h3>Footwear Collection</h3>
            <span>Spring/Summer 2022</span>
        </div>

        <div class="banner-box banner-box3">
            <h3>T-SHIRTS</h3>
            <span>New Trendy Prints</span>
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
