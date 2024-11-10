@extends('layouts.app')

@section('title', 'Course')

@section('content')
    <div style="display: flex; flex-direction: column; gap: 2vh; padding-block: 50px" class="container">
        <h2>{{$course->name}}</h2>
        <p style="font-size: 0.9rem">{{$course->description}}</p>
    </div>

@endsection
