@extends('layouts.app')

@section('title', 'Categories')

@section('content')

    <div style="display: flex; flex-direction: column; gap: 2vh; padding-block: 50px" class="container">
        <form action={{ route('categories.index') }} method="get">
            <div style="display: flex; gap: 8px; align-items: center">
                <label for="category_id" style="font-size: 1.5rem; font-weight: 600;">Categories: </label>
                <select style="width: 30%" name="category_id" class="form-select" aria-label="Default select example">
                    <option value="">All Categories</option>
                    <option value="1" {{request('category_id') == 1 ? 'selected' : ''}}>Software Engineering</option>
                    <option value="2" {{request('category_id') == 2 ? 'selected' : ''}}>Interactive Multimedia</option>
                </select>
                <button type="submit" class="btn btn-primary">Apply Filter</button>
            </div>
        </form>

        <h2>Available Courses to take:</h2>
        @foreach ($courses as $course)
            <div style="width: 100%; display: flex; gap: 8px; align-items: center">
                <div style="width: 40%; height: 100%;">
                    <img style="width: 100%; height: 100%;" src={{ asset($course->image_url) }} alt="">
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <h5 class="card-title">{{ $course->name }}</h5>
                    <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                    <a href={{ route('courses.show', $course->id) }} class="btn btn-primary">Read more</a>
                </div>
            </div>
        @endforeach
        {{ $courses->appends(request()->except('page'))->links() }}
    </div>

@endsection
