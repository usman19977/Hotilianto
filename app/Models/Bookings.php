<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bookings extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['halls_id','users_id','guest_qty','date_requested'];
    public  function hall(){
        return $this->belongsTo('App\Models\Hall','halls_id','id');
    }
    public  function user(){
        return $this->belongsTo('App\Models\User','users_id','id');
    }
}
