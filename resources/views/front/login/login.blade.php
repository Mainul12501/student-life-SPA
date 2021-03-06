@extends('front.master')
@section('body')
{{--    <div class="mt-t" style="background-image: url('https://thumb-p4.xhcdn.com/a/jwMUfrL5zLb3PqwkZ9jERg/000/103/676/834_1000.gif'); min-height: 500px; background-repeat: no-repeat; background-size: cover">--}}
    <div class="mt-t" style="background-image: url('https://i.ytimg.com/vi/6lt2JfJdGSY/maxresdefault.jpg'); min-height: 500px; background-repeat: no-repeat; background-size: cover">



        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="margin-top: 30%; margin-bottom: 20%;">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row py-2">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row py-2">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row py-2">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember_me" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0 pt-1">
                                    <div class="col-md-12 offset-md-1">


                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link f-s-14 roboto" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        <a href="{{ route('register') }}" class="roboto f-s-14">Don't have an account? Register Now</a>
                                    </div>
                                </div>

                                <div class="form-group row pt-2">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="d-grid mx-auto col-12">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
