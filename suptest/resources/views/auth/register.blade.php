<html>

<head>
    <title>Admin Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v19/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v19/css/main.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-45 p-r-45 p-t-65 p-b-50">
                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-33">
                        SUPTECH SANTE | REGISTER
                    </span>

                    <!-- Name -->
                    <div class="wrap-input100 validate-input">
                        <input class="input100 @error('fullName') is-invalid @enderror" 
                               type="text" 
                               name="fullName" 
                               id="fullName"
                               placeholder="Full Name" 
                               value="{{ old('fullName') }}" 
                               required 
                               autofocus 
                               autocomplete="fullName">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                        @error('fullName')
                            <div class="text-danger mt-1">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="wrap-input100 validate-input">
                        <input class="input100 @error('email') is-invalid @enderror" 
                               type="email" 
                               name="email" 
                               id="email"
                               placeholder="Email" 
                               value="{{ old('email') }}" 
                               required 
                               autocomplete="email">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                        @error('email')
                            <div class="text-danger mt-1">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="wrap-input100 validate-input">
                        <input class="input100 @error('password') is-invalid @enderror" 
                               type="password" 
                               name="password" 
                               id="password"
                               placeholder="Password" 
                               required 
                               autocomplete="new-password">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                        @error('password')
                            <div class="text-danger mt-1">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="wrap-input100 validate-input">
                        <input class="input100" 
                               type="password" 
                               name="password_confirmation" 
                               id="password_confirmation"
                               placeholder="Confirm Password" 
                               required 
                               autocomplete="new-password">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <!-- Submit Button -->
                    <div class="container-login100-form-btn m-t-20">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <!-- Link to Login -->
                    <div class="text-center mt-4">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
