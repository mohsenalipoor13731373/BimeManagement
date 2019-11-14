@extends('layouts.app')

@section('content')
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <a class="hiddenanchor" id="reset"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>فرم ورود</h1>
                            <input id="email" placeholder="ایمیل" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <input id="password" placeholder="کلمه عبور" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        <div>
                            <input type="submit" value="ورود" class="btn btn-default submit">

                            <a class="reset_pass" href="#reset">رمز ورود را از دست دادید؟</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">جدید در سایت؟
                                <a href="#signup" class="to_register"> ایجاد حساب </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i>بیمه</h1>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1>ایجاد حساب</h1>
                            <input id="name" placeholder="نام کاربری" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <input id="email" placeholder="ایمیل" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <input id="password" placeholder="کلمه عبور" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input id="password-confirm" placeholder="تکرار کلمه عبور" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <div>
                            <input type="submit" value="ارسال" class="btn btn-default submit">
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">در حال حاضر عضو هستید؟
                                <a href="#signin" class="to_register"> ورود </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i>بیمه</h1>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <div id="rest_pass" class="animate form rest_pass_form">
                <section class="login_content">
                    <!-- /password recovery -->
                    <form action="index.html">
                        <h1>بازیابی رمز عبور</h1>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" placeholder="ایمیل" />
                            <div class="form-control-feedback">
                                <i class="fa fa-envelope-o text-muted"></i>
                            </div>
                        </div>
                        <a href="">بازیابی رمز عبور </a>
                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">جدید در سایت؟
                                <a href="#signup" class="to_register"> ایجاد حساب </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i>بیمه</h1>
                            </div>
                        </div>
                    </form>
                    <!-- Password recovery -->
                </section>
            </div>
        </div>
    </div>
@endsection
