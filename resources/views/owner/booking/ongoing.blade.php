@extends('layouts.backend.app')

@section('page_title', 'Bookings | Ongoing')

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
        <h4 class="text-uppercase">Bookings</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading">
                    <h4 class="card-title float-left text-info">Ongoing Bookings</h4>
                </div>
                <hr class="m-0">
                <div class="card-block">
                    <div class="table-overflow">
                        <table id="dt-opt" class="table table-lg table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-center">Sl.</th>
                                    <th>Name</th>
                                    <th>Phone No.</th>
                                    <th>Booking Date</th>
                                    <th>Booking Time</th>
                                    <th>Total Person</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($owners as $item => $owner) --}}
                                <tr>
                                    <td class="text-center">
                                        <div class="mrg-top-5">
                                            <span class="text-dark">
                                                <b>{{ '01' }}</b>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mrg-top-5">
                                            <span>{{ 'customer_name' }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mrg-top-5">
                                            <span>{{ 'phone_number' }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        {{-- @php
                                            $date = new DateTime($owner->created_at);
                                        @endphp --}}
                                        <div class="mrg-top-5">
                                            <span>{{ 'booking_date' }}</span>
                                            {{-- <span>{{ $date->format('d M Y') }}</span> --}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mrg-top-5">
                                            <span>{{ 'booking_time' }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mrg-top-5">
                                            <span>{{ 'total_person' }}</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mrg-top-10 dropdown">
                                            <a href="#" class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="ti-more"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">
                                                        <i class="ti-eye pdd-right-10 text-info"></i>
                                                        <span>See Details</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="confirmation">
                                                        <i class="ti-check pdd-right-10 text-success"></i>
                                                        <span>Accept</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="confirmation">
                                                        <i class="ti-close pdd-right-10 text-danger"></i>
                                                        <span>Cancel</span>
                                                    </a>
                                                </li>
                                            </ul>
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
