@extends('layouts.backend.app')

@section('page_title', 'Inactive Restaurants')

@section('css_links')
    {{--  External CSS  --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/media/css/jquery.dataTables.css') }}" />
@endsection

@section('custom_css')
    {{--  External CSS  --}}
    <style>
        /* Custom CSS Here */

    </style>
@endsection

@section('main_content')
<div class="container-fluid">
    <div class="page-title">
        <h4>Inactive Restaurants</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading">
                    <h4 class="card-title float-left">All Inactive Restaurants</h4>
                </div>
                <hr class="m-t-0">
                <div class="card-block">
                    <div class="table-overflow">
                        <table id="dt-opt" class="table table-lg table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-center">Sl.</th>
                                    <th>Name</th>
                                    <th>Restaurant</th>
                                    <th>Contact No.</th>
                                    <th>Email</th>
                                    <th>Joined Date</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($users as $item => $user) --}}
                                <tr>
                                    <td class="text-center">
                                        <div class="mrg-top-15">
                                            <span class="text-dark">
                                                <b>01</b>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mrg-top-15">
                                            <span>
                                                <b>user_name</b>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mrg-top-15">
                                            <span>
                                                <b>restaurant_name</b>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mrg-top-15">
                                            <span>
                                                <b>23434656</b>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mrg-top-15">
                                            <span>user_email</span>
                                        </div>
                                    </td>
                                    <td>
                                        {{-- @php
                                            $date = new DateTime($user->created_at);
                                        @endphp --}}
                                        <div class="mrg-top-15">
                                            {{-- <span>{{ $date->format('d M Y') }}</span> --}}
                                            <span>12-12-2020</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mrg-top-15">
                                            {{-- @if ($user->status == 1) --}}
                                                <b class="text-success">Active</b>
                                            {{-- @else
                                                <b class="text-danger">Deactivate</b>
                                            @endif --}}
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

                                                {{-- @if ($user->status == 1) --}}
                                                    <li>
                                                        <a href="#" class="confirmation">
                                                            <i class="ti-close pdd-right-10 text-danger"></i>
                                                            <span>Deactivate</span>
                                                        </a>
                                                    </li>
                                                {{-- @else
                                                    <li>
                                                        <a href="{{ route('superadmin.setting.change_status', ['user_id' => $user->id]) }}" class="confirmation">
                                                            <i class="ti-check pdd-right-10 text-success"></i>
                                                            <span>Activate</span>
                                                        </a>
                                                    </li>
                                                @endif --}}

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
