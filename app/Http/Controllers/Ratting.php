<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Ratting extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reviews = \App\Models\Ratting::with(['hall'])->get();
        return view('manager.reviews',['data'=> $reviews,'title' => 'Reviews','role' => Auth::user()->roles[0]->name]);
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
        //
        $review = new \App\Models\Ratting();
        $review->halls_id = $request->halls_id;
        $review->person_name = $request->person_name;
        $review->person_email = $request->person_email;
        $review->person_review = $request->review_text;

        $review->status = 0;
        $review->value = $request->value;
        $review->save();
       return  redirect('hall/'.$request->halls_id);

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
    public function showManagerReviews() {

        $reviews = \App\Models\Ratting::whereHas('hall', function ($q) {
            return $q->where('user_id', '=', Auth::user()->id);
        })->with(['hall'])->get();

//return $reviews;
        return view('manager.reviews',['data'=> $reviews,'title' => 'Reviews','role' => Auth::user()->roles[0]->name]);
    }

    public function approve(Request $request, $id)
    {
        $resource = new \App\Models\Ratting();
        $resource->exists = true;
        $resource->id = $id; //already exists in database.
        $resource->status = 1;
        $resource->save();
       $hallid =   \App\Models\Ratting::where(['id'=>$resource->id])->with(['hall' => function($q){
           return $q->select('id');
       }])->get()[0]->hall->id;
        $ratting =  \App\Models\Ratting::where(['halls_id'=>$hallid,'status'=>1])->selectRaw('SUM(value)/COUNT(halls_id) AS avg_rating')->first()->avg_rating;
        $rattingfnf = number_format((float)$ratting, 1, '.', '');
        $hall = new \App\Models\hall();
        $hall->exists = true;
        $hall->id = $hallid; //already exists in database.
        $hall->ratting = $rattingfnf;
        $hall->save();
        return redirect()->back();
    }
    public function reject(Request $request, $id)
    {
        //
        $resource = new \App\Models\Ratting();
        $resource->exists = true;
        $resource->id = $id; //already exists in database.
        $resource->status = 2;
        $resource->save();
        $hallid =   \App\Models\Ratting::where(['id'=>$resource->id])->with(['hall' => function($q){
            return $q->select('id');
        }])->get()[0]->hall->id;
        $ratting =  \App\Models\Ratting::where(['halls_id'=>$hallid,'status'=>1])->selectRaw('SUM(value)/COUNT(halls_id) AS avg_rating')->first()->avg_rating;
        $rattingfnf = number_format((float)$ratting, 1, '.', '');
        $hall = new \App\Models\hall();
        $hall->exists = true;
        $hall->id = $hallid; //already exists in database.
        $hall->ratting = $rattingfnf;
        $hall->save();
        return redirect()->back();
    }
}
