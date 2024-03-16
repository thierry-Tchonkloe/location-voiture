<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Login and register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


    @include('header')


    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>
            <form action="#login" method="POST" id="login">
                @csrf
                    <div class="input-box animation" style="--i:1; --j:22;">
                        <input type="email" name="email" required>
                        <label >User Email</label>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box animation" style="--i:2; --j:23;">
                        <input type="password" name="password" required>
                        <label >Password</label>
                    </div>
                    <button type="submit" class="btn animation" style="--i:3; --j:24;">Login</button>
                    <div class="logreg-link animation" style="--i:4; --j:25;">
                        <p>Don t have an account?
                            <a href="#" class="register-link"> Sign Up</a>
                        </p>
                    </div>
            </form>
            @if (session('status'))

                <a href="#"  class="login-link">{{ session('status') }}</a>

            @endif
        </div>

        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">Welcome Back!</h2>
            <p class="animation" style="--i:1; --j:21;">Bienvenue sur la page de connexion de mon site web</p>
        </div>

        <div class="form-box register">
            <h2 class="animation" style="--i:17; --j:0;">Sign Up</h2>
            <form action="#register" method="POST" id="register">
            @csrf
                <div class="input-box animation" style="--i:18; --j:1;">
                    <input type="text" name="username" required>
                    <label >Username</label>
                    <box-icon type='solid' name='user'></box-icon>
                    <?php echo isset($errUn)?"<span class='error'>{$errUn}</span>":""; ?>
                </div>
                <div class="input-box animation" style="--i:19; --j:2;">
                    <input type="email" name="email" required>
                    <label >Email</label>
                    <box-icon name='envelope' type='solid' ></box-icon>
                    <i class="fa-solid fa-envelope"></i>
                    <?php echo isset($errUe)?"<span class='error'>{$errUe}</span>":""; ?>
                </div>
                <div class="input-box animation" style="--i:20; --j:3;">
                    <input type="password" name="password" required>
                    <label >Password</label>
                    <box-icon name='lock-alt' type='solid' ></box-icon>
                    <?php echo isset($errPass)?"<span class='error'>{$errPass}</span>":""; ?>
                </div>
                <button type="submit" class="btn animation" style="--i:21; --j:4;">Sign Up</button>
                <div class="logreg-link animation" style="--i:22; --j:5;">
                    <p>Already have an account?
                        <a href="#"  class="login-link"> Login</a>
                    </p>
                </div>
            </form>
            @if (session('status'))

                <a href="#"  class="login-link">{{ session('status') }}</a>

            @endif
        </div>

        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">Welcome Back!</h2>
            <p class="animation" style="--i:18; --j:1;">Bienvenue sur la page d Inscription de mon site web</p>
        </div>

    </div>
    <script src="js/script.js"></script>
</body>
</html>
