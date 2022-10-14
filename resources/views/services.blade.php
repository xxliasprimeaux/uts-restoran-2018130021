@extends('layouts.master')
@section('title', 'Home')
@section('content')

<!-- Service -->
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
</div>

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

@endsection
