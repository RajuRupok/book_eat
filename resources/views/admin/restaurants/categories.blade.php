@extends('layouts.backend.app')

@section('page_title', 'Restaurant Categories')

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
        <h4>Restaurant Categories</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading">
                    <h4 class="card-title float-right">All Categories</h4>

                    <a href="javascript:void(0);" data-toggle="modal" data-target="#add_category_item" class="btn btn-dark btn-sm float-left m-b-0">Add New Category</a>
                </div>

                <hr class="m-t-0">
                <div class="card-block">
                    <div class="table-overflow">
                        <table id="dt-opt" class="table table-lg table-hover table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-center">Sl.</th>
                                    <th>Name</th>
                                    <th>Joined Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item => $category)
                                <tr>
                                    <td class="text-center">
                                        <div class="mrg-top-15">
                                            <span class="text-dark">
                                                <b>{{ $item+1 }}</b>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mrg-top-15">
                                            <span class="text-dark">
                                                <b>{{ $category->name }}</b>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            $date = new DateTime($category->created_at);
                                        @endphp
                                        <div class="mrg-top-15">
                                            <span>{{ $date->format('d M Y') }}</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="mrg-top-10 dropdown">
                                            <a href="#" class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="ti-more"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);" data-toggle="modal" data-todo="{{ $category }}" data-target="#show_category_item">
                                                        <i class="ti-pencil pdd-right-10 text-warning"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Upload File Modal --}}
    <div class="modal fade" id="add_category_item">
        <form action="{{ route('admin.settings.category.store') }}" method="post">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="float-left"><b><span id="social_name">Add New Category</span></b></h4>
                        <button class="btn btn-default btn-icon btn-rounded p-l-8 p-r-7 p-t-6 p-b-4" data-dismiss="modal">
                            <i class="ti-close"></i>
                        </button>
                    </div>
                    <div class="modal-body media-details-modal">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Name <span class="required">*</span></label>
                                    <input autocomplete="off" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Category Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border top">
                        <ul class="list-unstyled list-inline pull-right">
                            <li class="list-inline-item">
                                <button type="submit" id="new_category_submit" class="btn btn-dark btn-sm text-bold">
                                    <i class="ti-save"></i>
                                    Add Category
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="modal fade" id="show_category_item">
        <form action="{{ route('admin.settings.category.update') }}" method="post">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="float-left"><b><span id="social_name">Update Category</span></b></h4>
                        <button class="btn btn-default btn-icon btn-rounded p-l-8 p-r-7 p-t-6 p-b-4" data-dismiss="modal">
                            <i class="ti-close"></i>
                        </button>
                    </div>
                    <div class="modal-body media-details-modal">
                        <div class="row">
                            <input type="hidden" name="id" id="show_category_id" value="">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Name <span class="required">*</span></label>
                                    <input autocomplete="off" id="show_category_name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Category Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border top">
                        <ul class="list-unstyled list-inline pull-right">
                            <li class="list-inline-item">
                                <button type="submit" id="update_category_submit" class="btn btn-dark btn-sm text-bold">
                                    <i class="ti-save"></i>
                                    Update Category
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
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
        $('#show_category_item').on('shown.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var data = button.data('todo');
            var modal = $(this);

            // console.log(data);

            modal.find('.modal-body #show_category_name').val(data.name);
            modal.find('.modal-body #show_category_id').val(data.id);
        })

    </script>
@endsection
