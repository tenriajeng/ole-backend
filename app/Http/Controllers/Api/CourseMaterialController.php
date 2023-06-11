<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseMaterialRequest;
use App\Http\Requests\UpdateCourseMaterialRequest;
use App\Http\Resources\CourseMaterialResource;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\CourseSection;

class CourseMaterialController extends Controller
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
     * @param  \App\Http\Requests\StoreCourseMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseMaterialRequest $request)
    {
        $input = $request->only('name', 'course_slug', 'course_section_slug');

        $course = Course::whereSlug($input['course_slug'])->first();
        $course_section = CourseSection::whereSlug($input['course_section_slug'])->first();

        $input['status'] = 'publish';
        $input['description'] = 'publish';
        $input['course_id'] = $course->id;
        $input['course_section_id'] = $course_section->id;

        $course_material = CourseMaterial::create($input);

        return Response(["message" => "Course section success fully created", "data" => $course_material]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseMaterial  $courseMaterial
     * @return \Illuminate\Http\Response
     */
    public function show($material)
    {
        $material = CourseMaterial::where('slug', $material)->first();

        return new CourseMaterialResource($material);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseMaterial  $courseMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseMaterial $courseMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseMaterialRequest  $request
     * @param  \App\Models\CourseMaterial  $courseMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseMaterialRequest $request, CourseMaterial $courseMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseMaterial  $courseMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseMaterial $courseMaterial)
    {
        //
    }
}
