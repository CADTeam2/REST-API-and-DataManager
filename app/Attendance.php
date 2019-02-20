<?php

namespace App;

use Session;
use User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use SoftDeletes;

    /**
     * The table containing the Attendances.
     *
     * @var string
     */
    protected $table = "Attendances";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sessionID',
        'userID',
        'userType',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at',
    ];
    
    /**
     * Gets the User this model belongs to.
     *
     * @return Relationship
     */
    public function user(){
        return $this->belongsTo('User');
    }
    
    /**
     * Gets the Session this model belongs to.
     *
     * @return Relationship
     */
    public function session(){
        return $this->belongsTo('Session');
    }
}

