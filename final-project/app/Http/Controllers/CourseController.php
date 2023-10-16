<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Course::all();
        return view('pages.index',['courses'=>$courses]);
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'product_code' => $request->product_code ,
            'price' => $request->price,
        ];
       if (Course::create($data)){
        //return 'Product is created';
        return redirect(route('home'));
    }

        
        else {
            return 'false';
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('pages.show',['course'=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('pages.edit',['course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Course $course, Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'product_code' =>'required',
            'price' => 'required',
        ]);
       $course->update($data);
        return redirect(route('course.index'))->with('success','Course updated Successffuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        {
            $course->delete();
            return redirect(route('course.index'))->with('success',' Product deleted Successffuly');
       }
    }
}
