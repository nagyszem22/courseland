<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;
use App\Section;
use App\Lesson;


class courseController extends Controller
{
    public function show(Request $request, $courseId, $lessonId=0)
    {
    	if ($lessonId == 0) {
    		$lesson = Lesson::where('course_id', $courseId)->orderBy('id')->first();
    	} else {
    		$lesson = Lesson::where('id', $lessonId)->where('course_id', $courseId)->first();
    	}
    	$guest = $request->get('guest');
    	$guest->lessons()->syncWithoutDetaching([$lesson->id]);
    	return view('portal.course', ['course' => Course::find($courseId), 'lesson' => $lesson, 'guest' => $guest, 'next' => Lesson::where('id', '>', $lesson->id)->min('id')]);
    }
}
