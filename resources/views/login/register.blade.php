<!DOCTYPE html>


<html>

    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('login/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('login/reset.css') }}">


        <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">
        <link href="{{asset('login/login.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="wrapper">
            <div class="container">
                <h1>Register</h1>
                <form class="form" method="POST">
                    <input type="text" placeholder="Name" value="" name="name" autocomplete="false">
                    <input type="text" placeholder="Email" value="" name="email" autocomplete="false">
                    <input type="password" placeholder="Password" name="password" value="" autocomplete="new-password">
                    <input type="password" placeholder="Password-confirmation" name="password_confirmation" value="" autocomplete="new-password">
                    <button type="submit" id="login-button" name="btnlogin" >Register</button>

                    {{csrf_field()}}
                </form>
            </div>

            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </body>

</html>
