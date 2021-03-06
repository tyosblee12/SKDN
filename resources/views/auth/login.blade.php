<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Keuangan - STMIK Dharma Negara</title>

    <link href="{{asset ('style/css/bootstrap.css')}}" rel="stylesheet">
    <!-- <link href="style/style.css" rel="stylesheet"> -->
    <!-- NEW CSS -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('style/css/login1.css') }}">
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 px-0 d-none d-sm-block">
                    <img src="{{asset ('style/img/A1-04.jpg')}}" alt="login image" class="login-img">
                </div>
                <div class="col-lg-4 col-md-4 login-section-wrapper text-center">
                    <div class="brand-wrapper">
                        <img src="{{asset ('style/img/DNBS1.png')}}" alt="logo" class="logo">
                    </div>
                    <div class="login-wrapper my-auto ">
                        <h1 class="login-title">Silahkan Masuk</h1>
                        <form action="{{route ('ceklogin')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="sr-only fa">Username</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group ">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="***********">
                            </div>
                            <input type="submit" class="btn btn-block login-btn mb-4" name="submit" value="LOGIN">

                        </form>
                        <a href="#!" class="forgot-password-link">Forgot password?</a>
                    </div>
                </div>
            </div>
    </main>

    <script src="{{asset ('style/js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset ('style/js/bootstrap.min.js')}}"></script>
</body>

</html>