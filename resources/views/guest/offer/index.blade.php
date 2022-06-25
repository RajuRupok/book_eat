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
    <!--=============================================== Start product_curb ================================================-->
    <section class="product_curb" data-background="{{ asset('frontend/images/banner/03.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="product_curb_content">
                        <a class="btn btn-dark" href=""><i class="far fa-bookmark"></i> Add To Favourite</a>
                        {{-- <a class="btn btn-primary" href=""><i class="fas fa-bookmark"></i> Remove From Favourite</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End product_curb ================================================-->



    <!--=============================================== Start restaurat_details ================================================-->
    <section class="resturant_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="resturant_details_content pt-0" id="offer_bg">
                        <!-- start details_coupon -->
                        <div class="details_coupon" id="offer_tabs">
                            <div class="details_tmb_banner">
                                <figure>
                                    <img src="{{ asset('frontend/images/banner/04.jpg') }}" alt="" class="img-fluid w-100">
                                </figure>
                            </div>
                            <div class="details_coupon_content">
                                <h3>Upto 10% Cashback offer on Using your #12312334 Coupon</h3>
                                <ul class="offerin_date">
                                    <li><span>Offer Published Date:</span> 20 January 2020</li>
                                    <li><span>Offer Ending Date:</span> 30 January 2020</li>
                                </ul>
                                <article>
                                    <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. Enjoy 2 Coupon Free on Wide range </p>
                                </article>
                                <div class="more_content1">
                                    <ul class="item_list">
                                        <li>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages.</li>
                                        <li>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages.</li>
                                    </ul>
                                    <div class="offer_chose">
                                        <a href="" class="btn1 text-right">Chose This Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="reservation_area">
                        <div class="reservation_banner" data-background="{{ asset('frontend/images/banner/06.jpg') }}"></div>
                        <div class="reservation_form">
                            <h3>Make a reservation</h3>
                            <form action="" method="" class="row">
                                <div class="col-lg-12">
                                    <select name="" id="">
                                        <option value="">Party Size</option>
                                    </select>
                                </div>
                                <div class='col-lg-12'>
                                    <div class="date">
                                        <input type="date" id="arrows">
                                        <span><i class="fas fa-chevron-down"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <select name="" id="">
                                        <option value="">10:10 AM</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkbox">
                                        <h5>Select offer</h5>
                                        <div class="check_box_wrap">
                                            <input type="checkbox" id="ossm" name="ossm">
                                            <label for="ossm">Upto 10% Cashback offer on Using your #12312334 Coupon</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkbox">
                                        <div class="check_box_wrap">
                                            <input type="checkbox" id="ossm" name="ossm">
                                            <label for="ossm">Upto 10% Cashback offer on Using your #12312334 Coupon</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkbox">
                                        <div class="check_box_wrap">
                                            <input type="checkbox" id="ossm" name="ossm">
                                            <label for="ossm">Upto 10% Cashback offer on Using your #12312334 Coupon</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn1 btn-lg btn-block">Find A table</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================== End restaurat_details ================================================-->



    <!--=============================================== Start product_banner_area ================================================-->
    <section class="product_banner p-70">
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



    <!--=============================================== Start product_offer ================================================-->
    <section class="product_offer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="resturant_product_heading">
                        <h2>Recent Restaurant Offers</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row mt-20">
                        <div class="col-sm-6 col-lg-3">
                            <a href="">
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
                            </a>
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
