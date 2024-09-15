<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login')</title>
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>

</head>

<body>
    {{-- <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="g-recaptcha" data-sitekey="6LemzjQqAAAAAHsWYUrq3nug0m-b1Iv2g8Hm1GXb"></div>

                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>

                        <div class="text-center mt-3">
                            <a href="{{ route('register') }}" class="btn btn-link">Don't have an account? Register here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>
                <img src="default/img/logo.png" alt="Logo"/>
                <span>Login</span>
            </header>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field email">
                    <div class="input-area">
                        <input id="email" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                        <i class="icon fas fa-envelope"></i>
                    </div>
                    @error('email')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type="password" placeholder="Password" id="password" name="password" required>
                        <i class="icon fas fa-lock"></i>
                    </div>
                    @error('password')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                {{-- <div class="g-recaptcha" data-sitekey="6LemzjQqAAAAAHsWYUrq3nug0m-b1Iv2g8Hm1GXb"></div> --}}
                {{-- <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.sitekey') }}"></div> --}}
                <button type="submit"><span>Login</span></button>
            </form>
            <div class="signup">
                <span>Don't have an account? <a href="{{ route('register') }}">Signup</a></span>
            </div>
            
        </div>
        {{-- <div class="registration form">
            <header>
                <img src="img/logo.png" alt="Logo"/>
                <span>Register</span>
            </header>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="field name">
                    <div class="input-area">
                        <input type="text" id="nama_user" name="nama_user" value="{{ old('nama_user') }}" placeholder="Enter your name" required autofocus>
                        <i class="icon fas fa-user"></i>
                    </div>
                    @error('nama_user')
                        <div class="error error-txt">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                        <i class="icon fas fa-envelope"></i>
                    </div>
                    @error('email')
                        <div class="error error-txt">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type="password" id="password" name="password" placeholder="Create a password" required>
                        <i class="icon fas fa-lock"></i>
                    </div>
                    @error('password')
                        <div class="error error-txt">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="field confirm-password">
                    <div class="input-area">
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                        <i class="icon fas fa-lock"></i>
                    </div>
                    @error('password_confirmation')
                        <div class="error error-txt">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                <button type="submit"><span>Signup</span></button>
            </form>
            <div class="signup">
                <span>Already have an account? <label for="check">Login</label></span>
            </div>
        </div> --}}
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script  cript src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

</html>
