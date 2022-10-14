@extends('layouts.master')
@section('title', 'Home')
@section('content')

<!-- Home -->
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">#1 Mushroom<br>Restaurant</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Are you a mushroom lover? You just picked the right place! We serve mushroom dishes for mushroom lovers with sophisticated tastebuds.</p>
                <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>

<!-- About -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Maison
                    <br>de Champignon</h1>
                <p class="mb-4">Maison de Champignon was founded in 2010 in Bandung, Indonesia. The
                    franchise, operated under Shroom Industridustries of Bandung, Inc.,
                    is headquartered in Bandung, Indonesia.</p>
                <p class="mb-4">For over 10 years, Maison de
                    Champignon has been serving up healthy, mushroom dishes to order in
                    an eclectic, art-filled, and family-friendly environment. Each restaurant
                    is locally owned and operated and provides a unique feel focused around
                    great customer service and high-quality food.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">12</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">36</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>

<!-- Service -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Experienced Chefs</h5>
                        <p>Serve our mushroom dishes with love, just for you.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5>Quality Mushrooms</h5>
                        <p>We pick the best mushrooms for the finest tasting dishes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                        <h5>Online Order</h5>
                        <p>We accept online orders via our website.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h5>24/7 Service</h5>
                        <p>Craving for mushrooms at 2am? Call us right away.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Menu -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mt-n1 mb-0">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Special</small>
                            <h6 class="mt-n1 mb-0">Lunch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mt-n1 mb-0">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Roast Mushroom Gnocchi</span>
                                        <span class="text-primary">$10</span>
                                    </h5>
                                    <small class="fst-italic">Mushrooms with blue cheese, gnocchi and spinach.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Raw Mushroom</span>
                                        <span class="text-primary">$5</span>
                                    </h5>
                                    <small class="fst-italic">For those who think natural = better.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mushroom Brunch</span>
                                        <span class="text-primary">$15</span>
                                    </h5>
                                    <small class="fst-italic">t's comforting yet healthy, fibre rich and gluten-free too.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mushroom Stroganoff</span>
                                        <span class="text-primary">$12</span>
                                    </h5>
                                    <small class="fst-italic">Traditional creamy casserole, low in fat and calories.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mushroom Jakcket Potatoes</span>
                                        <span class="text-primary">$11</span>
                                    </h5>
                                    <small class="fst-italic">Healthy, low-calorie, gluten-free and ideal for a filling lunch or supper.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mushroom Carbonara</span>
                                        <span class="text-primary">$16</span>
                                    </h5>
                                    <small class="fst-italic">Healthy veggie carbonara with chestnut and button mushrooms.</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mushroom Soup</span>
                                        <span class="text-primary">$10</span>
                                    </h5>
                                    <small class="fst-italic">Comforting mushroom soup made with cream, onions and garlic.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Truffled Mushroom Pâté</span>
                                        <span class="text-primary">$17</span>
                                    </h5>
                                    <small class="fst-italic">Great partner to toast, mini crispbreads and cornichons.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-9.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mushroom & Chestnut Rotolo</span>
                                        <span class="text-primary">$18</span>
                                    </h5>
                                    <small class="fst-italic">Fab looking rolled lasagne sheets and festive crispy sage.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-10.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mushroom Juice</span>
                                        <span class="text-primary">$20</span>
                                    </h5>
                                    <small class="fst-italic">Just to see if somebody would still buy it lol.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-11.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Creamy Mushroom & Spinach Pasta</span>
                                        <span class="text-primary">$19</span>
                                    </h5>
                                    <small class="fst-italic">Quick and low calorie dinner. Just delicious.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-12.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken, Kale, & Mushroom Pot Pie</span>
                                        <span class="text-primary">$22</span>
                                    </h5>
                                    <small class="fst-italic">A satisfying chicken and mushroom one-pot.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-13.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mushroom Tart</span>
                                        <span class="text-primary">$25</span>
                                    </h5>
                                    <small class="fst-italic">Celebrate some mushroom fanatic's birthday together.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-14.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Buttered Wild Mushrooms on Toast</span>
                                        <span class="text-primary">$15</span>
                                    </h5>
                                    <small class="fst-italic">Golden brown, winter warming mushrooms on hot buttered toast.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-15.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken, Leek, & Mushroom Pie</span>
                                        <span class="text-primary">$16</span>
                                    </h5>
                                    <small class="fst-italic">Enjoy the succulent chicken and crisp puff pastry with a dollop of tomato ketchup.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-16.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Sausage & Mushroom Pot Pie</span>
                                        <span class="text-primary">$18</span>
                                    </h5>
                                    <small class="fst-italic">Dish of pork meatballs with crispy ciabatta topping and crème fraîche sauce.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-17.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Creamy Mushroom Pasta</span>
                                        <span class="text-primary">$24</span>
                                    </h5>
                                    <small class="fst-italic">Rich, creamy, and flavourful dinner.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="img/menu-18.jpg" alt="" style="width: 80px; height: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mushroom & Goat Chees Calzone</span>
                                        <span class="text-primary">$18</span>
                                    </h5>
                                    <small class="fst-italic">A versatile veggie meal that's bursting with flavour.</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Master Chefs</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Gordong Ramsey</h5>
                    <small>Chef</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                    </div>
                    <h5 class="mb-0">The Rock</h5>
                    <small>Chef</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Ty Burrel</h5>
                    <small>Chef</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Breadley Cooper</h5>
                    <small>Chef</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Testimonial -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5">Our Clients Said</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>A LITERAL HEAVEN for mushroom lovers. The place is nice and cozy, its very comfortable to study there.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Sarah Sulastri</h5>
                        <small>Student</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Great service, affordable prices. Loved the raw mushrooms btw, so very mushroomy. Keep it up!!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Bartolomeus K.</h5>
                        <small>Designer</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Tempatnya nyaman banget, makanannya enak. Trus tempatnya strategis juga. Maap gabisa bahasa inggris hehe.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Juan R.</h5>
                        <small>Engineer</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>So in love with Maison de Champignon. When they said they have "24/7 service" they didn't lie.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Mina S.</h5>
                        <small>Businesswoman</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reservation -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                <h1 class="text-white mb-4">Book A Table Online</h1>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                <label for="datetime">Date & Time</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="select1">
                                    <option value="1">People 1</option>
                                    <option value="2">People 2</option>
                                    <option value="3">People 3</option>
                                </select>
                                <label for="select1">No Of People</label>
                                </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                <label for="message">Special Request</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
