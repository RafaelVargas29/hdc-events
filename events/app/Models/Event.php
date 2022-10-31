<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];   
    
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\user'); 
    }

    public function users (){
        return $this->belongsToMany('App\Models\User');
    }
    
}
