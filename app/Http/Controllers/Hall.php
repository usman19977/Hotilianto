<?php

namespace App\Http\Controllers;

use App\Models\Ammenties;
use App\Models\Bookings;
use App\Models\Photos;
use App\Models\VenueTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Hall extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hall =  \App\Models\hall::firstorfail()->orderBy('id','desc')->get();


//return $hall;

        return view('manager.myhalls',['data'=> $hall,'title' => 'My Halls','role' => Auth::user()->roles[0]->name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = \App\Models\Cities::all();
        $venueTypes = VenueTypes::all();

        return view('manager.addlisting', ['cities' => $city,'venuw_types' => $venueTypes,'role' => Auth::user()->roles[0]->name ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reqInstance = $request->all();

        $user = \App\Models\User::findorfail(Auth::user()->id);
        $hall = new \App\Models\hall([
            'name' => $reqInstance['name'],
            'address' => $reqInstance['address'],
            'guest_range' => $reqInstance['guest_range'],
            'city_id' =>  $reqInstance['city_id'],
            'venuetype_id' => $reqInstance['venuetype_id'],
            'price_per_guest' => $reqInstance['price_per_guest'],
            'details' => $reqInstance['details'],
            'status' => 0,
            'ratting' => 0.0
            ]);

       $hallinserted =  $user->halls()->save($hall);
       if(count($reqInstance['menuitem'] ) > 0){
           foreach ($reqInstance['menuitem'] as $amenti){
               $amentitoadd = new Ammenties(['name' => $amenti]);
               $hallinserted->ammenties()->save($amentitoadd);
           }
       }
       if($request->hasfile('photos'))
        {   $i = 1;
            foreach($request->file('photos') as $file)
            { $i++;
                $name = time().$i.'.'.$file->extension();
                $file->move(public_path().'/hallimages/', $name);
            $photo = new Photos(['path' => '/hallimages/'.$name]);
                $hallinserted->photos()->save($photo);
            }
        }







        return redirect()->back();

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

        $hall = \App\Models\hall::firstorfail()->where(['id'=>$id,'status' => 1])->with(['photos','venuetype','city','ammenties','rattings'=> function($q){
           return  $q->where(['status'=>1]);
        },])->get();

        $ratting =  \App\Models\Ratting::where(['halls_id'=>$id,'status'=>1])->selectRaw('SUM(value)/COUNT(halls_id) AS avg_rating')->first()->avg_rating;

        $rattingfnf = number_format((float)$ratting, 1, '.', '');
        $ratting_1 = 0;
        $ratting_2 = 0;
        $ratting_3 = 0;
        $ratting_4 = 0;
        $ratting_5 = 0;

        foreach ($hall[0]->rattings as $ratting){
          switch ($ratting->value){
              case 1 :
                  {
                      $ratting_1 += 1;
                      break;
                  }
              case 2 :
              {
                  $ratting_2 += 1;
                  break;
              }
              case 3 :
              {
                  $ratting_3 += 1;
                  break;
              }
              case 4 :
              {
                  $ratting_4 += 1;
                  break;
              }
              case 5 :
              {
                  $ratting_5 += 1;
                  break;
              }
              default:
              {
                  break;
              }

          }
            }

        //($ratting_1/array_sum($hall[0]->rattings))*100;
        //return   ($ratting_2/count($hall[0]->rattings))*100;
        if($rattingfnf > 0) {
            return view('frontend.detail',['data'=>$hall,'rattings' => [
                'ratting_round_off'=>round($rattingfnf,0),'ratting'=>$rattingfnf ,
                'ratting_percentage_1star' =>($ratting_1/count($hall[0]->rattings))*100,
                'ratting_percentage_2star' =>($ratting_2/count($hall[0]->rattings))*100,
                'ratting_percentage_3star' =>($ratting_3/count($hall[0]->rattings))*100,
                'ratting_percentage_4star' =>($ratting_4/count($hall[0]->rattings))*100,
                'ratting_percentage_5star' =>($ratting_5/count($hall[0]->rattings))*100
            ]
            ]);
        }
        else {
            return view('frontend.detail',['data'=>$hall,'rattings' => [
                'ratting_round_off'=>round($rattingfnf,0),'ratting'=>$rattingfnf ,
                'ratting_percentage_1star' =>0,
                'ratting_percentage_2star' =>0,
                'ratting_percentage_3star' =>0,
                'ratting_percentage_4star' =>0,
                'ratting_percentage_5star' =>0
            ]
            ]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $city = \App\Models\Cities::all();
        $venueTypes = VenueTypes::all();
        return view('manager.editlisting', ['cities' => $city,'venuw_types' => $venueTypes ]);
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


    public function showManagerHalls()
    {

        $hall =  \App\Models\hall::firstorfail()->where('user_id',Auth::user()->id)->orderBy('id','desc')->get();


//return $hall;

        return view('manager.myhalls',['data'=> $hall,'title' => 'My Halls','role' => Auth::user()->roles[0]->name]);

    }

    public function approve(Request $request, $id)
    {
        $resource = new \App\Models\hall();
        $resource->exists = true;
        $resource->id = $id; //already exists in database.
        $resource->status = 1;
        $resource->save();
        return redirect()->back();
    }
    public function reject(Request $request, $id)
    {
        //
        $resource = new \App\Models\Hall();
        $resource->exists = true;
        $resource->id = $id; //already exists in database.
        $resource->status = 2;
        $resource->save();
        return redirect()->back();
    }
}
