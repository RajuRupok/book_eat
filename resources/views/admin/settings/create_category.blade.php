@extends('layouts.backend.app')

@section('page_title', 'Manager Create')

@section('css_links')
    {{--  External CSS  --}}

@endsection

@section('custom_css')
    {{--  External CSS  --}}
    <style>
    /* Custom CSS Here */
        textarea.form-control{
            min-height: auto;
            height: auto;
        }
    </style>
@endsection

@section('main_content')
<div class="container-fluid">
    <div class="page-title">
        <h4>Add Cateogry</h4>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('admin.settings.category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header p-25">
                        <h5 class="text-center">
                            Add Category
                        </h5>
                    </div>
                    <div class="card-block p-25">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Name <span class="required">*</span></label>
                                    <input autocomplete="off" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Category Name" required>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border top">
                        <ul class="list-unstyled list-inline pull-right">
                            <li class="list-inline-item">
                                <button type="submit" class="btn btn-warning btn-sm text-bold">
                                    <i class="ti-save"></i>
                                    Assign Manager
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // $('#img-preview').css('background-image', 'url('+e.target.result +')');
                    $('#img-preview').attr('src', e.target.result);
                    $('#img-preview').hide();
                    $('#img-preview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#img-upload").change(function() {
            readURL(this);
        });
    </script>

    <script>
        // Custom Script Here
        $( document ).ready(function() {
            $( '#passwordGenerate' ).on( "click", function(){
                var text = "";
                var possible = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";

                for (var i = 0; i < 12; i++)
                    text += possible.charAt(Math.floor(Math.random() * possible.length));

                var sendpass = document.getElementById("password_generator");
                sendpass.value = text;
            });


            $( '#copyPass' ).on( "click", function(){
                var copyPass = document.getElementById("password_generator");
                copyPass.select();
                document.execCommand("copy");
            });
        });
    </script>
@endsection
