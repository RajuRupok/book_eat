@extends('layouts.backend.app')

@section('page_title', 'Offer | Active')

@section('css_links')
    {{--  External CSS  --}}
@endsection

@section('custom_css')
    {{--  External CSS  --}}
    <style>
        /* Custom CSS Here */
        .table > tbody > tr > td {
            vertical-align: middle !important;
        }
    </style>
@endsection

@section('main_content')
<div class="container-fluid">
    <div class="page-title">
        <h4 class="text-uppercase">Active Offers</h4>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <ul class="list-unstyled list-info">
                    <li>
                        <div class="pdd-vertical-10 pdd-horizon-20">
                            <img class="thumb-img img-circle" src="{{ asset('assets/images/others/img-4.jpg') }}" alt="">
                            <div class="info">
                                <span class="title">offer_name_here</span>
                                <span class="sub-title">
                                        <i class="ti-calendar pdd-right-5"></i><span>17 Jan, 2020</span>
                                        <i class="ti-timer pdd-left-10 pdd-right-5"></i><span>12:23:55</span>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="portlet">
                    <ul class="portlet-item navbar">
                        <li class="dropdown">
                            <a href="#" class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="ti-more"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="ti-eye pdd-right-10 text-primary"></i>
                                        <span>View Offer</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-pencil pdd-right-10 text-info"></i>
                                        <span>Edit</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="confirmation">
                                        <i class="ti-cut pdd-right-10 text-warning"></i>
                                        <span>Deactivate</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="confirmation">
                                        <i class="ti-close pdd-right-10 text-danger"></i>
                                        <span>Remove</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card-media">
                    <img class="img-responsive" src="{{ asset('assets/images/others/img-4.jpg') }}" alt="">
                </div>
                <div class="card-block">
                    <h4>Card With Image</h4>
                    <p>Hey, whoa, just where do you think you're going? Master Luke here is your rightful owner. We'll have no more of this Obi-Wan Kenobi. I have decided that we shall stay here.Well, look at you, a general</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script_links')
    {{--  External Javascript Links --}}
@endsection

@section('custom_script')
    {{--  External Custom Javascript  --}}
    <script>
        // Custom Script Here

    </script>
@endsection
