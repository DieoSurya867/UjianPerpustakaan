<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href={{ asset('css/login.css') }} />
    <title>Petugas & Siswa Login Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <h2 class="title">Petugas</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                </form>
                <form action="#" class="sign-up-form">
                    <h2 class="title">Siswa</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="NIS" />
                    </div>
                    <input type="submit" class="btn" value="Login" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <button class="btn transparent" style="margin-right: 175px; margin-bottom: 5px" id="sign-up-btn">
                        Siswa
                    </button>
                </div>
                <img src={{ asset('img/login.svg') }} class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <button class="btn transparent" style="margin-top: 10px" id="sign-in-btn">
                        Petugas
                    </button>
                </div>
                <img src={{ asset('img/singup.svg') }} class="image" alt="" />
            </div>
        </div>
    </div>

    <script src={{ asset('/js/login.js') }}></script>
</body>

</html>
