<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    /////////////////////////////////////////////////////
    /// INITIALIZATION
    /////////////////////////////////////////////////////

    /* Use soft delete */
    use SoftDeletes;

    /* The database table used by the model. */
    protected $table = 'lessons';

    /* The attributes that are mass assignable. */
    protected $fillable = [
    	'course_id',
    	'section_id',
        'name',
        'description',
        'type',
        'link'
    ];

    /* The date when the item was deleted at */
    protected $dates = ['deleted_at'];



    /////////////////////////////////////////////////////
    /// ATTRIBUTES
    /////////////////////////////////////////////////////

    /* Initialize added attributes */
    protected $appends = [];

    /* Create is visited by the current guest attribute */
    public function isVisited($guestId) {
        return (bool) $this->belongsToMany('App\Guest', 'lessons_guests', 'lesson_id', 'guest_id')->wherePivot('guest_id', $guestId)->first();
    }
    

    
    /////////////////////////////////////////////////////
    /// RELATIONS
    /////////////////////////////////////////////////////

    /* Relation between the current lesson and the guests who visited it earlier */
    public function guests(){
        return $this->belongsToMany('App\Guest', 'lessons_guests', 'lesson_id', 'guest_id');
    }

    /* Relation between the current lesson and the section which contains it */
    public function section(){
        return $this->belongsTo('App\Section', 'section_id');
    }

    /* Relation between the current lesson and the course which contains it */
    public function course(){
        return $this->belongsTo('App\Course', 'course_id');
    }
}
