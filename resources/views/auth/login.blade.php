<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #3C3D37">
        <div class="card p-4 text-center"
            style="width: 450px; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);background-color: black">
            <div class="mb-4">
                <!-- Logo -->
                <div class="login-card">
                    <div class="logo">
                        {{-- <img> harusnya--}}
                    </div>
                    <h5 class="mb-4 font-weight-bold" style="color: white;">Log In to ...</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input id="usrename" type="username" name="username" style="background-color: black; color: white" class="form-control login-input @error('username') is-invalid @enderror" placeholder="Username" plac value="{{ old('username') }}" required>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input id="password" type="password" name="password"  style="background-color: black; color: white " class="form-control login-input @error('password') is-invalid @enderror" placeholder="Password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-4 login-button rounded-pill" >Log In</button>
                    </form>
                    <div class="mb-3 font-weight-bold" style="color: #70767b">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
                    </div>
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')
</body>

</html>
