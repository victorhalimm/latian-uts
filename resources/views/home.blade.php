@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div style="width: 100%; height: 100%;">
    <img style="height: 100%; width: 100%; object-fit: cover;" src={{ asset('home-assets/jumbotron.jpg') }} alt="">
</div>
@endsection



