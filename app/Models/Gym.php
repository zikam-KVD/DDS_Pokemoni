<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gym extends Model
{
    protected $table = "gyms";

    protected $fillable = ["gym", "location_id"];

    public $timestamps = false;

    public function Location(): HasOne
    {
        return $this->hasOne(Location::class, "id", "location_id");
    }

    public function Trainer(): HasOne
    {
        return $this->hasOne(User::class, "id", "trainer_id");
    }

}
