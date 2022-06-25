@extends('layouts.frontend.app')

@section('page_title', 'HOMEPAGE')

@section('css_links')
    {{--  External CSS  --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">

@endsection

@section('custom_css')
    {{--  External CSS  --}}
    <style>
    /* Custom CSS Here */
    </style>
@endsection

@section('main_content')
    <!--=============================================== Start slider_area ================================================-->
    <section class="slider_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider_wrap owl-carousel">
                        <div class="single_slider_items">
                            <figure>
                                <img src="{{ asset('frontend/images/slider/01.jpg') }}" alt="Image Not Found" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End slider_area ================================================-->



    <!--=============================================== Start product_search_area ================================================-->
    <section class="product_search_area">
        <div class="container product_bg">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="product_wrap">
                        <div class="product_heading">
                            <h5>Search what are you looking for?</h5>
                        </div>
                        <div class="product_form">
                            <form action="" method="" class="row">
                                <div class="col-12 col-md-3 col-lg-3">
                                    <input type="text" placeholder="Type Keywords" name="keyword">
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <select name="" id="select_product">
                                        <option value="">Select Offer Type</option>
                                        <option value="">Product one</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-3 col-lg-3">
                                    <select name="" id="select_product">
                                        <option value="">Select Your City</option>
                                        <option value="">Product one</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <button type="submit" class="btn1"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End product_search_area ================================================-->



    <!--=============================================== Start resturant_product ================================================-->
    <section class="resturant_product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="resturant_product_heading">
                        <h2>Indian Restaurant</h2>
                    </div>
                </div>
                <div class="col-lg-12 mt-20">
                    <div class="row product_p_0">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                            <a href="#">
                                <div class="product_wrap">
                                    <div class="product_thumb" data-background="{{ asset('frontend/images/product/01.jpg') }}"></div>
                                    <div class="product_logo_item">
                                        <figure>
                                            <img src="{{ asset('frontend/images/product_logo/01.png') }}" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="product_item_content">
                                        <h5>The Ruby Restaurant</h5>
                                        <div class="restaurant_location">
                                            <span>House 323, Road 5</span>
                                            <span>Baridhara DOHS, Dhaka 1206</span>
                                        </div>
                                        <div class="resturant_review">
                                            <div class="rating">
                                                <input type="radio" id="star1" name="rating[]" value="5" /><label for="star1" title="Rocks!">5 stars</label>
                                                <input type="radio" id="star9" name="rating[]" value="4" /><label for="star9" title="Rocks!">4 stars</label>
                                                <input type="radio" id="star8" name="rating[]" value="3" /><label for="star8" title="Pretty good">3 stars</label>
                                                <input type="radio" id="star7" name="rating[]" value="2" /><label for="star7" title="Pretty good">2 stars</label>
                                                <input type="radio" id="star6" name="rating[]" value="1" /><label for="star6" title="Meh">1 star</label>
                                            </div>
                                            <span><i class="fas fa-ellipsis-h"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="#" class="mt-40 btn1">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End resturant_product ================================================-->



    <!--=============================================== Start Banner_area ================================================-->
    <section class="banner_content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-xl-8">
                    <div class="banner_single_item">
                        <figure>
                            <img src="{{ asset('frontend/images/banner/01.jpg') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12 col-xl-4">
                    <div class="row inner_banner_item">
                        <div class="col-sm-6 col-lg-6">
                            <div class="banner_single_item1">
                                <figure>
                                    <img src="{{ asset('frontend/images/slider/01.jpg') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="banner_single_item1">
                                <figure>
                                    <img src="{{ asset('frontend/images/slider/02.jpg') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="banner_single_item1">
                                <figure>
                                    <img src="{{ asset('frontend/images/slider/03.jpg') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="banner_single_item1">
                                <figure>
                                    <img src="{{ asset('frontend/images/slider/04.jpg') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End Banner_area ================================================-->



    <!--=============================================== Start resturant_product ================================================-->
    <section class="resturant_product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="resturant_product_heading">
                        <h2>Italian Restaurant</h2>
                    </div>
                </div>
                <div class="col-lg-12 mt-20">
                    <div class="row product_p_0">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                            <a href="#">
                                <div class="product_wrap">
                                    <div class="product_thumb" data-background="{{ asset('frontend/images/product/01.jpg') }}"></div>
                                    <div class="product_logo_item">
                                        <figure>
                                            <img src="{{ asset('frontend/images/product_logo/01.png') }}" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="product_item_content">
                                        <h5>The Ruby Restaurant</h5>
                                        <div class="restaurant_location">
                                            <span>House 323, Road 5</span>
                                            <span>Baridhara DOHS, Dhaka 1206</span>
                                        </div>
                                        <div class="resturant_review">
                                            <div class="rating">
                                                <input type="radio" id="star1" name="rating[]" value="5" /><label for="star1" title="Rocks!">5 stars</label>
                                                <input type="radio" id="star9" name="rating[]" value="4" /><label for="star9" title="Rocks!">4 stars</label>
                                                <input type="radio" id="star8" name="rating[]" value="3" /><label for="star8" title="Pretty good">3 stars</label>
                                                <input type="radio" id="star7" name="rating[]" value="2" /><label for="star7" title="Pretty good">2 stars</label>
                                                <input type="radio" id="star6" name="rating[]" value="1" /><label for="star6" title="Meh">1 star</label>
                                            </div>
                                            <span><i class="fas fa-ellipsis-h"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="#" class="mt-40 btn1">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End resturant_product ================================================-->


    <!--=============================================== Start product_banner_area ================================================-->
    <section class="product_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_banner_thumb">
                        <figure>
                            <img src="{{ asset('frontend/images/banner/02.jpg') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End product_banner_area ================================================-->


    <!--=============================================== Start product_ad ================================================-->
    <section class="product_add">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="resturant_product_heading">
                        <h2>Other Restaurant</h2>
                    </div>
                </div>
                <div class="col-lg-4 mt-30">
                    <div class="add_product">
                        <figure>
                            <img src="{{ asset('frontend/images/add/01.jpg') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-8 mt-30">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="firstTab" data-toggle="tab" href="#tabOne" role="tab" aria-controls="tabOne" aria-selected="true">American Restaurant </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="secondTab" data-toggle="tab" href="#tabTwo" role="tab" aria-controls="tabTwo" aria-selected="false">Chines Restaurant </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="thirdTab" data-toggle="tab" href="#tabThree" role="tab" aria-controls="tabThree" aria-selected="false">Italian Restaurant </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="fourthTab" data-toggle="tab" href="#tabFour" role="tab" aria-controls="tabFour" aria-selected="false">Indian Restaurant </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabOne" role="tabpanel" aria-labelledby="firstTab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row" id="pw_pl_0">
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                                            <a href="#">
                                                <div class="product_wrap">
                                                    <div class="product_thumb" data-background="{{ asset('frontend/images/product/01.jpg') }}"></div>
                                                    <div class="product_logo_item">
                                                        <figure>
                                                            <img src="{{ asset('frontend/images/product_logo/01.png') }}" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="product_item_content">
                                                        <h5>The Ruby Restaurant</h5>
                                                        <div class="restaurant_location">
                                                            <span>House 323, Road 5</span>
                                                            <span>Baridhara DOHS, Dhaka 1206</span>
                                                        </div>
                                                        <div class="resturant_review">
                                                            <div class="rating">
                                                                <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                                <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                                <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                                <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                                <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                                            </div>
                                                            <span><i class="fas fa-ellipsis-h"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabTwo" role="tabpanel" aria-labelledby="secondTab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row" id="pw_pl_0">
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                                            <a href="#">
                                                <div class="product_wrap">
                                                    <div class="product_thumb" data-background="{{ asset('frontend/images/product/01.jpg') }}"></div>
                                                    <div class="product_logo_item">
                                                        <figure>
                                                            <img src="{{ asset('frontend/images/product_logo/01.png') }}" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="product_item_content">
                                                        <h5>The Ruby Restaurant</h5>
                                                        <div class="restaurant_location">
                                                            <span>House 323, Road 5</span>
                                                            <span>Baridhara DOHS, Dhaka 1206</span>
                                                        </div>
                                                        <div class="resturant_review">
                                                            <div class="rating">
                                                                <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                                <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                                <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                                <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                                <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                                            </div>
                                                            <span><i class="fas fa-ellipsis-h"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabThree" role="tabpanel" aria-labelledby="thirdTab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row" id="pw_pl_0">
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                                            <a href="#">
                                                <div class="product_wrap">
                                                    <div class="product_thumb" data-background="{{ asset('frontend/images/product/01.jpg') }}"></div>
                                                    <div class="product_logo_item">
                                                        <figure>
                                                            <img src="{{ asset('frontend/images/product_logo/01.png') }}" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="product_item_content">
                                                        <h5>The Ruby Restaurant</h5>
                                                        <div class="restaurant_location">
                                                            <span>House 323, Road 5</span>
                                                            <span>Baridhara DOHS, Dhaka 1206</span>
                                                        </div>
                                                        <div class="resturant_review">
                                                            <div class="rating">
                                                                <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                                <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                                <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                                <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                                <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                                            </div>
                                                            <span><i class="fas fa-ellipsis-h"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabFour" role="tabpanel" aria-labelledby="fourthTab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row" id="pw_pl_0">
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                                            <a href="#">
                                                <div class="product_wrap">
                                                    <div class="product_thumb" data-background="{{ asset('frontend/images/product/01.jpg') }}"></div>
                                                    <div class="product_logo_item">
                                                        <figure>
                                                            <img src="{{ asset('frontend/images/product_logo/01.png') }}" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="product_item_content">
                                                        <h5>The Ruby Restaurant</h5>
                                                        <div class="restaurant_location">
                                                            <span>House 323, Road 5</span>
                                                            <span>Baridhara DOHS, Dhaka 1206</span>
                                                        </div>
                                                        <div class="resturant_review">
                                                            <div class="rating">
                                                                <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                                <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                                <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                                <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                                <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                                            </div>
                                                            <span><i class="fas fa-ellipsis-h"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End product_ad ================================================-->



    <!--=============================================== Start product_offer ================================================-->
    <section class="product_offer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="resturant_product_heading">
                        <h2>Offer Of The Day</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row mt-20">
                        <div class="col-sm-6 col-lg-3">
                            <div class="offer_product">
                                <div class="offer_product_thumb" data-background="{{ asset('frontend/images/slider/05.jpg') }}">
                                </div>
                                <div class="product_offer_content text-center">
                                    <h5>The Ruby Restaurant</h5>
                                    <article>
                                        <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant</p>
                                    </article>
                                    <div class="rating_wrap_system">
                                        <div class="rating">
                                            <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                            <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                            <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                            <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                            <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                        </div>
                                    </div>
                                    <span class="timing_alert"><img src="{{ asset('frontend/images/add/01.png') }}" alt="" class="img-fluid"> Till 12 Jan, 2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="offer_product">
                                <div class="offer_product_thumb" data-background="{{ asset('frontend/images/slider/03.jpg') }}">
                                </div>
                                <div class="product_offer_content text-center">
                                    <h5>The Ruby Restaurant</h5>
                                    <article>
                                        <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant</p>
                                    </article>
                                    <div class="rating_wrap_system">
                                        <div class="rating">
                                            <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                            <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                            <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                            <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                            <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                        </div>
                                    </div>
                                    <span class="timing_alert"><img src="{{ asset('frontend/images/add/01.png') }}" alt="" class="img-fluid"> Till 12 Jan, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End product_offer ================================================-->
@endsection


@section('script_links')
    {{--  External Javascript Links --}}
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
@endsection

@section('custom_script')
    {{--  External Custom Javascript  --}}
    <script>
        // Custom Script Here
    </script>
@endsection
