@extends('layouts.app')

@section('title', 'My Bookings')

@section('content')
        <div class="table-responsive">
            <h1>My museum bookings</h1>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <td><strong>Agent Name</strong></td>
                        <td><strong>Booking id</strong></td>
                        <td><strong>Traveler's Full Name</strong></td>
                        <td><strong>Museum Booked</strong></td>
                        <td><strong>Date</strong></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking->agent_name }}</td>
                            <td>{{ $booking->booking_id }}</td>
                            <td>{{ $booking->travelers_full_name }}</td>
                            <td>{{ $booking->museum_booked }}</td>
                            <td>{{ $booking->d_ate }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$bookings->appends(['agent' => $booking->agent_name])->links()}}
        </div>
@endsection
