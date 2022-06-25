<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="restaurant_logo">
                    <img src="{{ asset('frontend/images/logo/signin_logo.png') }}" alt="" class="img-fluid">
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="ForUser-tab" data-toggle="tab" href="#ForUser" role="tab" aria-controls="home" aria-selected="true">For User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ForRestaurant-tab" data-toggle="tab" href="#ForRestaurant" role="tab" aria-controls="profile" aria-selected="false">For Restaurant</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="ForUser" role="tabpanel" aria-labelledby="ForUser-tab">
                                <div class="signUp_form">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <input type="hidden" name="role_id" value="{{ encrypt(4) }}">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name*" autocomplete="off">
                                            </div>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="form-group col-md-12">
                                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username*" autocomplete="off">
                                            </div>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="form-group col-md-12">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address*" autocomplete="off">
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="form-group col-md-6">
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password*" autocomplete="off">
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="form-group col-md-6">
                                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password*" autocomplete="off">
                                            </div>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" name="" class="btn btn1 btn-lg">Register Now</button>
                                    </form>
                                    <div class="signIn-social">
                                        <p class="text-bold text-center text-underline">Or sign in with</p>
                                        <ul>
                                            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="gl"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                    <p>Already have an Account? <a href="javascript:void(0)" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Sign In</a></p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ForRestaurant" role="tabpanel" aria-labelledby="ForRestaurant-tab">
                                <div class="signUp_form">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <input type="hidden" name="role_id" value="{{ encrypt(3) }}">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Owner Full Name*" autocomplete="off">
                                            </div>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <div class="form-group col-md-12">
                                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username*" autocomplete="off">
                                            </div>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <div class="form-group col-md-12">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address*" autocomplete="off">
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <div class="form-group col-md-6">
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password*" autocomplete="off">
                                            </div>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <div class="form-group col-md-6">
                                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password*" autocomplete="off">
                                            </div>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <button type="submit" name="" class="btn btn1 btn-lg">Register Now</button>
                                    </form>
                                    <p>Already have an Account? <a href="javascript:void(0)" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Sign In</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
