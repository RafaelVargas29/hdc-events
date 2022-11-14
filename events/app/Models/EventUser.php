<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
    use HasFactory;

    protected $table = 'event_user';
    protected $primaryKey = 'event_id';

    public function event(){
        return $this->hasOne(Event::class, 'id', 'event_id');
    }
}
