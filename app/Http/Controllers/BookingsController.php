<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $agent = $request->get('agent');


        if ($agent != 'CM-GEORGE') {
            return redirect('/')
                ->withErrors('The username you have provided is invalid!');
        }else{
            $bookings = Booking::for_agent_until_days_ago($agent, 10)->paginate(4);
        }


        return view('bookings', ['bookings' => $bookings]);
    }
}