<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/landing.css')}}" rel="stylesheet">
    <title>Login Ke Portal</title>
</head>
<body>
    <header>
       <div class="logo">PT.Air Semarang Barat</div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2 class="Logo">Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-label for="email" :value="__('Email')" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: whitesmoke" />
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                        <x-input-label for="password" :value="__('Password')" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: whitesmoke" />
                    </div>
                    <button class="button" type="submit">Log in</button>
                </form>
            </div>
        </div>
    </section>
    @include('sweetalert::alert')

</body>
<script>
    $(document).ready(function () {
        $(".menu-toggle").click(function () {
            $('nav').toggleClass('active');
        })
    })
</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>