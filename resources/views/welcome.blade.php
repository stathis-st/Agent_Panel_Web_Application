@extends('layouts.app')

@section('title', "Agent's welcome page")

@section('content')
    <div class="well well-lg">
        <h1>Welcome to the Clio Muse back-office</h1>
        <h3>Please enter your username to see your bookings</h3>

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
@endsection

