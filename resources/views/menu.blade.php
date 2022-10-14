@extends('layouts.master')
@section('title', 'Home')
@section('content')

<!-- Menu -->
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
            </ol>
        </nav>
    </div>
</div>

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

@endsection
