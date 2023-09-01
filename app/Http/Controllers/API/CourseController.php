<?php

namespace App\Http\Controllers\API;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => 'All Courses',
            'data' => Course::all()
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $val = Validator::make($request->all(),[
            'date' => 'required',
            'title' => 'required |unique:courses,title',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'category' => 'required',
            'field' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'duration_hours' => 'required',
            'duration_month' => 'required',
            'content' => 'required',
            'teacher_id' => 'required',
        ]);

        if($val->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'All field required',
            ], 422);
        }

            $courseimage = rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/images'), $courseimage);

         $course = Course::create([
            'date' => $request->date,
            'title' => $request->title,
            'category' => $request->category,
            'field' => $request->field,
            'price' => $request->price,
            'duration' => $request->duration,
            'duration_hours'=>$request->duration_hours,
            'duration_month'=>$request->duration_month,
            'content' => $request->content,
            'teacher_id' => $request->teacher_id,
            'image' => $courseimage
        ]);


        if($course) {
            return response()->json([
                'status' => true,
                'message' => 'Course Created',
                'data' => $course
            ], 201);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Not Found',
            ], 404);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);

        if($course) {
            return response()->json([
                'status' => true,
                'message' => 'Show Courses',
                'data' => $course
            ], 200);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Not Found',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $course = Course::find($id);
        $courseimage = $course->image;
        if($request->hasFile('image')) {
            $courseimage = rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/images'), $courseimage);
        }
        $course->update($request->all());

        if($course) {
            return response()->json([
                'status' => true,
                'message' => 'Course Updated',
                'data' => $course
            ], 201);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Not Found',
            ], 404);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::destroy($id);

        if($course) {
            return response()->json([
                'status' => true,
                'message' => 'Course Deleted',
                'data' => []
            ], 200);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Not Found',
            ], 404);
        }
    }
}
