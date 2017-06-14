<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">



        <title>Agent's welcome page</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

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

            .container{
                mwidth: 300px;
                height: 400px;
                position: absolute;
                top: 10%;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
            }

            .btn{
                margin-top: 10px;
            }

            .alert, alert-danger{
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
            <div class="container col-md-2 col-md-offset-5 row top-buffer well well-lg">
                <p>Welcome to the Clio Muse back-office</p>
                <p>Please enter your username to see your bookings</p>


                <form action = "{{ action('BookingsController@show') }}"  method = "GET">

                    <input type="text" class="form-control" placeholder="Enter your username" name="agent">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </form>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <span>{{$errors->first()}}</span>
                    </div>
                @endif
            </div>
    </body>
</html>
