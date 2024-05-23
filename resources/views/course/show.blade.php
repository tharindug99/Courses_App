@extends('layout.app')
@section('content')

<h1>{{$course->title}}</h1>
<p>{{$course->instructor}}</p>
<p>{{$course->courseHead}}</p>

@endsection