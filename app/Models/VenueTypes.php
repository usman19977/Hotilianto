<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VenueTypes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected  $dates = ['deleted_at'];
    public function hall(){
        return $this->hasOne('App\Models\Hall','venuetype_id','id');
    }
}
