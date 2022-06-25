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
        <h4>Add Manager</h4>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{ route('admin.settings.manager.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-block p-25">
                        <div class="row justify-content-center m-b-20">
                            <div class="col-lg-12 text-center">
                                <div>
                                    <label for="img-upload" class="pointer">
                                        <img id="img-preview" src="{{ asset('assets/images/others/img-10.jpg') }}"  width="117" alt="">

                                        <span class="btn btn-default display-block no-mrg-btm">Choose Image</span>
                                        <input class="d-none @error('avatar') is-invalid @enderror" type="file" name="avatar" accept=".png, .jpg, .jpeg" id="img-upload" value="{{ old('avatar') }}">
                                    </label>
                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Manager Full Name <span class="required">*</span></label>
                                    <input autocomplete="off" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Mr. Jhon Doe" required>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Username <span class="required">*</span></label>
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="jhondoe" required>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email <span class="required">*</span></label>
                                    <input autocomplete="off" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="business@mail.com" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6 text-left">
                                            <label>Password. <span class="required">*</span></label>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="#" class="password-generate text-warning text-bold text-right" id="passwordGenerate">Generate</a>
                                        </div>
                                    </div>
                                    <input autocomplete="off" type="text" name="password" id="password_generator" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="123ABCabc!@#$%" required>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea autocomplete="off" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Business Address Here..." rows="3">{{ old('address') }}</textarea>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border top">
                        <ul class="list-unstyled list-inline pull-left">
                            <li class="list-inline-item">
                                <div class="checkbox checkbox-warning font-size-12">
                                    <input id="mail_status" name="mail_status" type="checkbox" checked required>
                                    <label for="mail_status" class="m-b-0 text-bold text-warning">Send Mail with login details?</label>
                                </div>
                            </li>
                        </ul>
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
