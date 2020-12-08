@extends('layouts.site')

@section('content')

<!-- Begin | Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
<div id="wrapper" data-scrollable="true">

    <header id="landing-header">
        <div class="container d-flex align-items-center py-3">
            <a href="{{ lurl('/') }}" class="brand">
                <img src="{{ url('assetss/images/logos/logo.svg') }}" alt="listen-app">
            </a>

            <ul class="header-auto-options ml-auto d-flex align-items-center">
                <li><a href="#" class="btn btn-pill btn-air btn-sm btn-dark" data-toggle="modal" data-target="#quickLogin">Sign in</a></li>
                <li><a href="{{ lurl(trans('routes.register')) }}" class="btn btn-pill btn-air btn-sm btn-danger">Sign up</a></li>
                
            </ul>
        </div>
    </header>

    <!-- Begin | Landing Page Banner [[ Find at scss/framework/base/pages/landing/landing.scss ]] -->
    <div class="banner landing-banner bg-landing">
        <div class="banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto text-center">
                        <h1>Upload&nbsp; Songs Free</h1>
                        <p style="font-size:20px">“Without music, life would be a mistake” ― Friedrich Nietzsche</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End | Landing Page Banner -->

    <!-- Begin | Landing Section [[ Find at scss/framework/base/pages/landing/landing.scss ]] -->
    <div class="landing-section">
        <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto text-center mb-5">
                <h3>More than  streaming </h3>
                <p class="font-md">Upload your music and listen like share, and comment with artists. Login or create an account.</p>
              </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 text-center feature">
                            <img src="{{ url('assetss/images/svg/speaker.svg') }}" alt="" height= "80                                                                                        ">
                          
                          <h5 class="mt-3">Prodcution</h5>
                          <p>Need a producer for your next track</p>
                        </div>
                      <div class="col-lg-3 col-sm-6 text-center feature">
                            <img src="{{ url('assetss/images/svg/mixer.svg') }}" alt="" height= "80                                                                                      ">
                        <h5 class="mt-3">Mastering</h5>
                          <p>Real hands-on mixdown and mastering </p>
                        </div>
                      <div class="col-lg-3 col-sm-6 text-center feature">
                          
                            <img src="{{ url('assetss/images/svg/graph1.svg') }}" alt="" height= "80
                                                                                       ">
                        <h5 class="mt-3">Advanced Stats</h5>
                          <p>Geo analytics to help you manage your fans</p>
                      </div>
                        <div class="col-lg-3 col-sm-6 text-center feature">
                            <img src="{{ url('assetss/images/svg/sell-music1.svg') }}" alt="" height= "80">
                          <h5 class="mt-3">Sell Your Music</h5>
                            <p>Get your songs on major platforms like Spotify &amp; iTunes</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End | Landing Section -->

    <!-- Begin | Landing Section [[ Find at scss/framework/base/pages/landing/landing.scss ]] -->
    <!-- End | Landing Section -->

    <!-- Begin | Landing Section [[ Find at scss/framework/base/pages/landing/landing.scss ]] -->
    <div class="landing-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto text-center mb-5">
                    <h3><h5 class="mt-3">Trending</h5>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="carousel-item-6">
                        <div class="text-center">
                            <div class="avatar avatar-xl avatar-circle mx-auto">
                                <img src="{{ url('assetss/images/cover/large/1.jpg') }}" alt="Arebica Luna">
                            </div>
                            <h6 class="mb-0 mt-2">Arebica Luna</h6>
                        </div>
                        <div class="text-center">
                            <div class="avatar avatar-xl avatar-circle mx-auto">
                                <img src="{{ url('assetss/images/cover/large/MITS.png') }}" alt="Gerrina Linda">
                            </div>
                            <h6 class="mb-0 mt-2">Gerrina Linda</h6>
                        </div>
                        <div class="text-center">
                            <div class="avatar avatar-xl avatar-circle mx-auto">
                                <img src="{{ url('assetss/images/cover/large/3.jpg') }}" alt="Arebica Luna">
                            </div>
                            <h6 class="mb-0 mt-2">Zunira Willy</h6>
                        </div>
                        <div class="text-center">
                            <div class="avatar avatar-xl avatar-circle mx-auto">
                                <img src="{{ url('assetss/images/cover/large/4.jpg') }}" alt="Johnny Marro">
                            </div>
                            <h6 class="mb-0 mt-2">Johnny Marro</h6>
                        </div>
                        <div class="text-center">
                            <div class="avatar avatar-xl avatar-circle mx-auto">
                                <img src="{{ url('assetss/images/cover/large/5.jpg') }}" alt="Jina Moore">
                            </div>
                            <h6 class="mb-0 mt-2">Jina Moore</h6>
                        </div>
                        <div class="text-center">
                            <div class="avatar avatar-xl avatar-circle mx-auto">
                                <img src="{{ url('assetss/images/cover/large/6.jpg') }}" alt="Rasomi Pelina">
                            </div>
                            <h6 class="mb-0 mt-2">Rasomi Pelina</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End | Landing Section -->

    <!-- Begin | Footer [[ Find at scss/framework/base/footer/footer.scss ]] -->
    <footer id="footer" class="bg-img">
        <div class="footer-content">
            <a href="#" class="email">Jellybeats</a>
            <div class="platform-btn-inline">
                <a href="#" class="btn btn-dark btn-air platform-btn">
                    <i class="ion-ios-cloud-upload"></i>
                    <div class="platform-btn-info">
                        <span class="platform-desc"></span>
                        <span class="platform-name">Upload</span>
                    </div>
                </a>
              <a href="#" class="btn btn-danger btn-air platform-btn">
                    
                    <i class="ion-ios-headset"></i>
                    
                    <div class="platform-btn-info">
                        <span class="platform-desc"></span>
                        <span class="platform-name">Listen</span>
                    </div>
                </a>
            </div>
        </div>
    </footer>
    <!-- End | Footer -->

</div>
<!-- End | Wrapper -->

<!-- Begin | Login Modal SignIn-->
<div class="modal fade" id="quickLogin" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 pb-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h6 class="modal-title text-center mb-3" id="loginTitle">Login</h6>
            <div class="modal-body">
                @if (isset($errors) and $errors->any() and old('quickLoginForm')=='1')
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <ul class="list list-check">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ lurl(trans('routes.login')) }}" method="POST" class="mx-4 pb-5">
                    {!! csrf_field() !!}
                    <div class="social-login">
                        <a href="{{ lurl('auth/facebook') }}" class="w-100 btn btn-social btn-facebook btn-default-air">
                            <span class="btn-content">
                                <i class="ion-logo-facebook"></i>
                                <span class="pl-2">Login With Facebook</span>
                            </span>
                        </a>
                        <a href="{{ lurl('/auth/google') }}" class="w-100 mt-3 btn btn-social btn-google btn-default-air">
                            <span class="btn-content">
                                <i class="ion-logo-google"></i>
                                <span class="pl-2">Login With Google</span>
                            </span>
                        </a>
                        <a href="{{ lurl('/auth/twitter') }}" class="w-100 mt-3 btn btn-social btn-twitter btn-default-air">
                            <span class="btn-content">
                                <i class="ion-logo-twitter"></i>
                                <span class="pl-2">Login With Twitter</span>
                            </span>
                        </a>
                        <a href="{{ lurl('/auth/linkedin') }}" class="w-100 mt-3 btn btn-social btn-linkedin btn-default-air">
                            <span class="btn-content">
                                <i class="ion-logo-linkedin"></i>
                                <span class="pl-2">Login With Linkedin</span>
                            </span>
                        </a>
                    </div>
                    <?php
						$loginValue = (session()->has('login')) ? session('login') : old('login');
						$loginField = getLoginField($loginValue);
						if ($loginField == 'phone') {
							$loginValue = phoneFormat($loginValue, old('country', config('country.code')));
						}
					?>
                    <?php $loginError = (isset($errors) and $errors->has('login')) ? ' is-invalid' : ''; ?>
                    <div class="form-group">
                        <input type="text" id="mLogin" name="login" class="form-control{{ $loginError }}" placeholder="Email" value="{{ $loginValue }}">
                    </div>
                    <?php $passwordError = (isset($errors) and $errors->has('password')) ? ' is-invalid' : ''; ?>
                    <div class="form-group">
                        <input type="password" id="mPassword" name="password" class="form-control{{ $passwordError }}" placeholder="Password" autocomplete="off">
                    </div>
                    <input type="hidden" name="quickLoginForm" value="1">
                    <button type="submit" id="loginBtn" class="btn btn-block btn-bold btn-air btn-info load-page"><i class="fa fa-user"></i> LOGIN</button>
                    <a href="{{ lurl('password/reset') }}" class="btn btn-link">Forgot your password?</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End | Login Modal -->
<!-- Begin | Login Modal (SignUp/pro)-->
<div class="modal fade" id="signupForm" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 pb-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h6 class="modal-title text-center mb-3" id="signupTitle">SignUp</h6>
            <div class="modal-body">
                <form method="POST" action="{{ lurl(trans('routes.register')) }}" class="mx-4 pb-5">
                    {!! csrf_field() !!}
                    <?php $nameError = (isset($errors) and $errors->has('name')) ? ' is-invalid' : ''; ?>
                    <div class="form-group required">
                        <input type="text" name="name" id="name" autofocus="" class="form-control input-md{{ $nameError }}" placeholder="Name" value="{{ old('name') }}">
                    </div>
                    <input id="countryCode" name="country_code" type="hidden" value="{{ config('country.code') }}">
                    <?php $emailError = (isset($errors) and $errors->has('email')) ? ' is-invalid' : ''; ?>
                    <div class="form-group required">
                        <input type="text" name="email" id="email" class="form-control{{ $emailError }}" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <?php $passwordError = (isset($errors) and $errors->has('password')) ? ' is-invalid' : ''; ?>
                    <div class="form-group required">
                        <input type="password" name="password" id="password" class="form-control{{ $passwordError }}" placeholder="Password">
                    </div>
                    <div class="form-group required">
                        <input type="password" class="form-control{{ $passwordError }}" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                        <small id="" class="form-text text-muted">
                            {{ t('at_least_num_characters', ['num' => config('larapen.core.passwordLength.min', 6)]) }}
                        </small>
                    </div>

                    @includeFirst([config('larapen.core.customizedViewPath') . 'layouts.inc.tools.recaptcha', 'layouts.inc.tools.recaptcha'], ['colLeft' => 'col-md-4', 'colRight' => 'col-md-6'])

                    <!-- term -->
                    <?php $termError = (isset($errors) and $errors->has('term')) ? ' is-invalid' : ''; ?>
                    <div class="form-group row required">
                        <label class="col-md-4 col-form-label"></label>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input name="term" id="term"
                                        class="form-check-input{{ $termError }}"
                                        value="1"
                                        type="checkbox" {{ (old('term')=='1') ? 'checked="checked"' : '' }}
                                >
                                
                                <label class="form-check-label" for="term">
                                    {!! t('i_have_read_and_agree_to_the_terms_and_conditions', ['attributes' => getUrlPageByType('terms')]) !!}
                                </label>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>

                    <button id="signupBtn" type="submit" class="btn btn-block btn-bold btn-air btn-info load-page"><i class="fa fa-user-plus"></i> Signup</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End | signUp Modal -->
@endsection
