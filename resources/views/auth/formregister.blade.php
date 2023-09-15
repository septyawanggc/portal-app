<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/landing.css')}}" rel="stylesheet">
    <title>Daftar Ke Dashboard</title>
</head>
<body>
    <header>
       <div class="logo">PT.Air Semarang Barat</div>
       @if(Session::has('success'))
                        <div class="alert alert-success" role="alert" style="align-content: center">
                            {{ Session::get('success') }}
                        </div>
            @endif
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/daftar">Register</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h2 class="Logo">Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-label for="name" :value="__('Name')" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" style="color:whitesmoke" />
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-label for="email" :value="__('Email')" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:whitesmoke" />
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                        <x-input-label for="password" :value="__('Password')" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" style="color:whitesmoke" />
                    </div>
                    
                    <div class="inputbox">
                        <ion-icon name="options-outline"></ion-icon>
                        <select class="select" id="level" name="level">
                            <option value="">Pilih Salah Satu</option>
                            <option value="Admin">Admin</option>
                            <option value="Dirut">Dirut</option>
                            <option value="PlantManager">Plant Manager</option>
                            <option value="SPV-Maintenance">SPV-Maintenance</option>
                            <option value="SPV-Produksi">SPV-Produksi</option>
                            <option value="HSE">HSE</option>
                            <option value="HCGS">HCGS</option>
                            <option value="Operator">Operator</option>
                            <option value="Teknisi">Teknisi</option>
                            <option value="SCM">Gudang</option>
                            <option value="Laborat">LAB</option>
                        </select>
                    </div> 
                    <button class="button" type="submit">Daftar</button>
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