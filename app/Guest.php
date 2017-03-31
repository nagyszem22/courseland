<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    /////////////////////////////////////////////////////
    /// INITIALIZATION
    /////////////////////////////////////////////////////

    /* Use soft delete */
    use SoftDeletes;

    /* The database table used by the model. */
    protected $table = 'guests';

    /* The attributes that are mass assignable. */
    protected $fillable = [
    	'session_id',
    	'ip_address',
        'browser'
    ];

    /* The date when the item was deleted at */
    protected $dates = ['deleted_at'];
    

    
    /////////////////////////////////////////////////////
    /// RELATIONS
    /////////////////////////////////////////////////////

    /* Relation between the current guest and the lessons he or she visited */
    public function lessons(){
        return $this->belongsToMany('App\Lesson', 'lessons_guests', 'guest_id', 'lesson_id');
    }
}
