<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class hall extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name' ,
        'address' ,
        'guest_range',
        'city_id',
        'venuetype_id',
        'price_per_guest',
        'details',
        'status',];


    public function city(){
        return $this->hasOne('App\Models\Cities','id','city_id');
    }
    public function venuetype(){
        return $this->belongsTo('App\Models\VenueTypes',);
    }
    public  function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public  function photos(){
        return $this->hasMany('App\Models\Photos','halls_id','id');
    }
    public  function ammenties(){
        return $this->hasMany('App\Models\Ammenties','halls_id','id');
    }
    public  function rattings(){
        return $this->hasMany('App\Models\Ratting','halls_id','id');
    }
    public  function bookings(){
        return $this->hasMany('App\Models\Bookings','halls_id','id');
    }




}
