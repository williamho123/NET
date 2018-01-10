<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internal extends Model
{
    /**
     * The attributes that are mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['registration_status',
                            'registration_ended',
                            'registration_open_date',
                            'tournament_date',
                            'registration_end_date'];
}
