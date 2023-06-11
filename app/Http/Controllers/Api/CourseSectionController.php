<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseSectionRequest;
use App\Http\Requests\UpdateCourseSectionRequest;
use App\Models\Course;
use App\Models\CourseSection;
use Illuminate\Http\Response;

class CourseSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourseSectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseSectionRequest $request): Response
    {
        $input = $request->only('name', 'course_slug');

        $course = Course::whereSlug($input['course_slug'])->first();

        $input['status'] = 'publish';
        $input['course_id'] = $course->id;

        $course_section = CourseSection::create($input);

        return Response(["message" => "Course section success fully created", "data" => $course_section]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseSection  $courseSection
     * @return \Illuminate\Http\Response
     */
    public function show(CourseSection $courseSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseSection  $courseSection
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseSection $courseSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseSectionRequest  $request
     * @param  \App\Models\CourseSection  $courseSection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseSectionRequest $request, CourseSection $courseSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseSection  $courseSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseSection $courseSection)
    {
        //
    }
}
