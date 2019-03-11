<?php

namespace App;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'entry',
    ];

    // encrypt title
    public function setTitleAttribute($value) {
        $this->attributes['title'] = Crypt::encryptString($value);
    }

    // decrypt title
    public function getTitleAttribute($value) {
        return Crypt::decryptString($value);
    }

    // encrypt entry
    public function setEntryAttribute($value) {
        $this->attributes['entry'] = Crypt::encryptString($value);
    }

    // decrypt entry
    public function getEntryAttribute($value) {
        return Crypt::decryptString($value);
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
