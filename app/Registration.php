<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Associate the registration data with its team.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function team() {

        return $this->hasOne('App\Team');
    }
}
