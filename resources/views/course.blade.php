@extends('layouts.web')

@section('content')
  <div class="grid grid-cols-3 gap-4">
    <div class="p-8 bg-gray-200 col-span-1">
      <ul class="flex flex-col">
        <li class="font-medium text-sm text-gray-400 uppercase mb-4">
          Content
        </li>
        @foreach ($course->posts as $post)
          <li class="flex items-center text-gray-600 mt-2">
            {{ $post->name }}
            @if ($post->free)
                <span class="text-xs text-gray-500 font-semibold bg-gray-300 px-2 rounded-full ml-auto">Free</span>
            @endif
          </li>
        @endforeach
      </ul>
    </div>
    <div class="text-gray-700 col-span-2">
      <img src="{{ $course->image }}" class="mb-4">
      <h2 class="text-4xl mb-4">{{ $course->name }}</h2>
      <p>{{ $course->description }}</p>

      <div class="flex mt-3">
        <img src="{{ $course->user->avatar }}" class="h-10 w-10 rounded-full mr-2">
        <div>
          <p class="text-gray-500 text-sm font-medium">{{ $course->user->name }}</p>
          <p class="text-gray-500 text-sm">{{ $course->created_at->diffForHumans() }}</p>
        </div>
      </div>

      <hr class="my-5" />

      <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Similar Courses</h1>
      </div>

      <div class="grid grid-cols-2 gap-4 my-8">
        @foreach ($course->related() as $related)
          <x-course-card :course="$related" />
        @endforeach
      </div>
    </div>
  </div>

  <hr class="my-10" />

  <livewire:course-list />
@endsection