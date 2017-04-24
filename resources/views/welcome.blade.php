<!DOCTYPE html>

<!-- Landing page for front en -->

<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>[S]quareList</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            /*Style values for body*/
            html, body {
                background-color: #fff;
                /*color: #636b6f;*/
                color: #1bc3d6;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            /*title alignment*/
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            /*position style*/
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            /*[S]quarelist title*/
            .title {
                font-size: 84px;
            }

            /*style info for top links*/
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links"> <!-- Begin top-right links. inherits link style -->
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div> <!-- end top-right links -->
            @endif

            <div class="content"> <!-- begin page content -->
                <div class="title m-b-md">
                    <strong>[S]</strong>quareList
                </div>

                <hr>

                <div class="content">
                    <p>
                        Welcome to [S]quareList
                    </p>

                    <p>
                        A place to search for an aquire items.
                    </p>
                </div>
            </div> <!-- end page content -->
        </div>
    </body>
</html>