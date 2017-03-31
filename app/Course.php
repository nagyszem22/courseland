<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    /////////////////////////////////////////////////////
    /// INITIALIZATION
    /////////////////////////////////////////////////////

    /* Use soft delete */
    use SoftDeletes;

    /* The database table used by the model. */
    protected $table = 'courses';

    /* The attributes that are mass assignable. */
    protected $fillable = [
    	'name',
    	'descripton',
    	'image'
    ];

    /* The date when the item was deleted at */
    protected $dates = ['deleted_at'];
    

    
    /////////////////////////////////////////////////////
    /// RELATIONS
    /////////////////////////////////////////////////////

    /* Relation between the current course and the sections which are contained by it */
    public function sections(){
        return $this->hasMany('App\Section', 'course_id')->orderBy('created_at', 'desc');
    }

    /* Relation between the current course and the lessons which are contained by it */
    public function lessons(){
        return $this->hasMany('App\Lesson', 'course_id')->orderBy('created_at', 'desc');
    }
}
