<head>

      <!--Import Google Icon Font-->
    <title>{{ __('Login') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<div class="row">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action white text" style="text-align: center">
            <img src="{{ asset('foto/logo.png')}}" style="height: 100px" alt="logo">
                <h3>{{ __('Login') }}</h3>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="card-content">
                <div class="form-field">
                    <label for="username">{{ __('Username') }}</label>
                    <input type="text" id="username"class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><br>

                <div class="form-field">
                    <label for="password">{{ __('Password') }}</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><br>

                <div class="form-field">
                    <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember"> {{ __('Remember Me') }}</label>
                </div><br>

                <div class="form-field">
                 <button class="btn-large waves-effect waves-dark" style="width:100%"> {{ __('Login') }}</button>
                </div>
                <div>
                    <br>
                </div>
                <div class="form-field">
                 @if (Route::has('password.request'))
                 <a class="btn btn-link" style="width:100%" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                 </a>
                 @endif
                </div><br>
            </div>
            </form>
        </div>
    </div>
</div>