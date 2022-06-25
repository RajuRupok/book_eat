@extends('layouts.backend.app')

@section('page_title', 'Reviews | Food')

@section('css_links')
    {{--  External CSS  --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/media/css/jquery.dataTables.css') }}" />
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
        <h4 class="text-uppercase">Reviews</h4>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading">
                    <h4 class="card-title float-left text-warning">Food Reviews</h4>
                </div>
                <hr class="m-0">
                <div class="card-block">
                    <div class="table-overflow">
                        <table id="dt-opt" class="table table-lg table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-center">Sl.</th>
                                    <th class="text-center">Ratings</th>
                                    <th class="text-center">Reviews</th>
                                    <th class="text-center">Review By</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($owners as $item => $owner) --}}
                                <tr class="review-table">
                                    <td class="text-center">
                                        <div class="mrg-top-5">
                                            <span class="text-dark">
                                                <b>{{ '01' }}</b>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mrg-top-5">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#show_review">
                                                <span class="text-link">
                                                    <b>4</b>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mrg-top-5">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#show_review">
                                                <span class="text-link">
                                                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mrg-top-5">
                                            <a href="javascript:void(0);">
                                                <span class="text-link">
                                                    <b>customer_name</b>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mrg-top-5">
                                            <span class="text-dark">
                                                <b>17 Jan 2020</b>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mrg-top-5">
                                            <span class="text-dark">
                                                <b>10:00:00</b>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('owner.review.modals.show_review')
</div>
@endsection


@section('script_links')
    {{--  External Javascript Links --}}
    <script src="{{ asset('assets/vendors/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/table/data-table.js') }}"></script>
@endsection

@section('custom_script')
    {{--  External Custom Javascript  --}}
    <script>
        // Custom Script Here

    </script>
@endsection
