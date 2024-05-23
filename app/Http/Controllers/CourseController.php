<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        //List all  
        $courses = Course::all();
        return view('course.index',compact('courses'));
    }

    public function create(){
        //Routing to page/view which will hold the create
        return view('course.create');
    }

    public function store(Request $request){
        //Create the entry for the course

        //Skipping the validatiion, pls add it
        Course::create($request->all());
        return redirect()->route('course.index');
    }

    public function show($id){
        $course = Course::find($id);
        return view('course.show',compact('course'));
    }

    public function edit($id){
        //edit data
        $courses = Course::find($id);
        return view('course.edit',compact('courses'));
    }

    public function update(Request $request,$id){
        //Logic to update the data from the server and post it
        //Validate the request before updating the record
        Course::find($id)->update($request->all());
        return redirect()->route('course.index');
    }

    public function destroy($id){
        //delete the data from the server
        //Validate the request before deleting the record
        Course::find($id)->delete();
        return redirect()->route('course.index');

    }
    
}
