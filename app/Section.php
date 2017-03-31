<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    /////////////////////////////////////////////////////
    /// INITIALIZATION
    /////////////////////////////////////////////////////

    /* Use soft delete */
    use SoftDeletes;

    /* The database table used by the model. */
    protected $table = 'sections';

    /* The attributes that are mass assignable. */
    protected $fillable = [
    	'course_id',
    	'name'
    ];

    /* The date when the item was deleted at */
    protected $dates = ['deleted_at'];
    

    
    /////////////////////////////////////////////////////
    /// RELATIONS
    /////////////////////////////////////////////////////

    /* Relation between the current section and the course which contains it */
    public function course(){
        return $this->belongsTo('App\Course', 'course_id');
    }

    /* Relation between the current section and the lessons which are contained by it */
    public function lessons(){
        return $this->hasMany('App\Lesson', 'section_id')->orderBy('created_at', 'desc');
    }

}
