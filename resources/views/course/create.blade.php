@extends('layout.app')

@section('content')

<h1 style="text-align: center; font-family: 'Arial', sans-serif; color: #2c3e50; margin-bottom: 20px;">Add Course</h1>
<form method="post" action="{{ route('course.store') }}" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background-color: #f9f9f9;">
    @csrf
    <div style="margin-bottom: 15px;">
        <label for="title" style="display: block; font-weight: bold; margin-bottom: 5px;">Course Title</label>
        <input type="text" name="title" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
    </div>

<div style="margin-bottom: 15px;">
    <label for="instructor" style="display: block; font-weight: bold; margin-bottom: 5px;">Course Instructor</label>
    <input type="text" name="instructor" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
</div>

<div style="margin-bottom: 15px;">
    <label for="courseHead" style="display: block; font-weight: bold; margin-bottom: 5px;">Course Head</label>
    <input type="text" name="courseHead" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"/>
</div>

<button type="submit" style="display: block; width: 100%; padding: 10px; background-color: #2c3e50; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">Submit</button>
</form>
@endsection