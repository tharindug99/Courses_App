@extends('layout.app')

@section('content')
<h1 style="text-align: center; font-family: 'Arial', sans-serif; color: #2c3e50; margin-bottom: 20px;">Courses</h1>

<table style="width: 100%; border-collapse: collapse; font-family: 'Arial', sans-serif; margin-bottom: 20px;">
    <thead>
        <tr>
            <th style="width: 30%; background-color: #34495e; color: white; padding: 10px; text-align: left;">Course Name</th>
            <th style="background-color: #34495e; color: white; padding: 10px; text-align: left;">Instructor</th>
            <th style="background-color: #34495e; color: white; padding: 10px; text-align: left;">Course Head</th>
            <th style="background-color: #34495e; color: white; padding: 10px; text-align: center;">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $course->title }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $course->instructor }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $course->courseHead }}</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                    <a href="{{ route('course.show', $course->id) }}" style="margin-right: 10px; text-decoration: none; color: #2980b9;">View</a>
                    <a href="{{ route('course.edit', $course->id) }}" style="margin-right: 10px; text-decoration: none; color: #27ae60;">Edit</a>
                    <form method="post" action="{{ route('course.destroy', $course->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: #e74c3c; color: white; border: none; padding: 5px 10px; border-radius: 3px; cursor: pointer;">Delete</button>    
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection