<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $hall = \App\Models\hall::find($id)->with(['photos','venuetype','city','ammenties','rattings',])->get();

        $ratting =  \App\Models\Ratting::where([['halls_id','=',$id],])->selectRaw('SUM(value)/COUNT(halls_id) AS avg_rating')->first()->avg_rating;
        $rattingfnf =  number_format((float)$ratting, 1, '.', '');
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
}
