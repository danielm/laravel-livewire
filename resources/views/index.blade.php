@extends('layouts.web')

@section('content')
  <div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Latest Courses</h1>
    <h3 class="text-lg text-gray-600">Educate yourself as an IT pro.</h3>
  </div>

  <livewire:course-list />
@endsection