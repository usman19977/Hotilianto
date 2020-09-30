<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\hall;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Booking extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {



    }
    public function index()
    {
        //
        if(Auth::user()->roles[0]->name =='administrator'){
            $bookings = \App\Models\Bookings::with(['hall'])->get();

            return view('manager.bookings',['data'=> $bookings,'title' => 'Booking','role' => Auth::user()->roles[0]->name ]);

        }
        else if (Auth::user()->roles[0]->name =='manager'){

            $bookings = \App\Models\Bookings::whereHas('hall', function ($q) {
                return $q->where('user_id', '=', Auth::user()->id);
            })->with(['hall'])->get();

          return view('manager.bookings',['data'=> $bookings,'title' => 'Booking','role'=>Auth::user()->roles[0]->name =='administrator']);
        }
        else if(Auth::user()->roles[0]->name =='user'){
//direct route se krdia data return
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $hall_id =  $request['hall_id'];
        $guest_qty = $request['guest_qty'];
        $date_requested = $request['date_requested'];

       $booking = new Bookings();

        $booking->status = 0;
        $booking->halls_id = $hall_id;
        $booking->users_id = $user_id;
        $booking->guest_qty = $guest_qty;
        $booking->date_requested = Carbon::parse($date_requested);
        $booking->save();




        return ['booking_id' => $booking->id,'status'=> 200];
//       return array(['booking' => $booking , 'status' => 200]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function approve(Request $request, $id)
    {
        $resource = new Bookings();
        $resource->exists = true;
        $resource->id = $id; //already exists in database.
        $resource->status = 1;
        $resource->save();
        return redirect()->back();
    }
    public function reject(Request $request, $id)
    {
        //
        $resource = new Bookings();
        $resource->exists = true;
        $resource->id = $id; //already exists in database.
        $resource->status = 2;
        $resource->save();
        return redirect()->back();
    }
}
