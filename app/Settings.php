<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'user_id'
    ];
    

    public function user() {
        return $this->belongsTo('App\User');
    }

}
