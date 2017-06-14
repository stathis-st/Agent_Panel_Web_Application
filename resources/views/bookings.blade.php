<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyBookings</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: black;
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
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
         <thead>
             <tr>
                 <td>Agent Name</td>
                 <td> Booking id</td>
                 <td>Traveler's Full Name</td>
                 <td>Museum Booked</td>
                 <td>Date</td>
             </tr>
         </thead>
         <tbody>
        @foreach($bookings as $booking)
         <tr>
             <td>{{ $booking->agent_name }}</td>
             <td>{{ $booking->booking_id }}</td>
             <td>{{ $booking->travelers_full_name }}</td>
             <td>{{ $booking->museum_booked }}</td>
             <td>{{ $booking->date }}</td>
         </tr>
        @endforeach
         </tbody>
        </table>
        {{$bookings->appends(['agent' => $booking->agent_name])->links()}}
    </div>
</div>
</body>
</html>
