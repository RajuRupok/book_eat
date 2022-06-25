<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <div class="signUp_form">
                            <form  method="POST" action="{{ route('loginWithUser') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Or Username">
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-group col-md-12">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <a href="" class="forget_pass text-center d-block">I forget My Password</a>
                                <button type="submit" name="" class="btn btn1 btn-lg">Sign In</button>
                            </form>
                            <div class="signIn-social">
                                <p class="text-bold text-center text-underline">Or sign in with</p>
                                <ul>
                                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="gl"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                            <p>Don’t have an Account? <a href="javascript:void(0)" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
