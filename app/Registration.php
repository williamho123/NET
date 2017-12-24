<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /**
     * Associate the registration data with its team.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team() {

        return $this->belongsTo('App\Team');
    }
}
