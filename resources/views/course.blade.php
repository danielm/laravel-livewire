@extends('layouts.web')

@section('content')
  <div class="grid grid-cols-3 gap-4">
    <div class="p-8 bg-gray-200 col-span-1">
      <ul class="flex flex-col">
        <li class="font-medium text-sm text-gray-400 uppercase mb-4">
          Contenido
        </li>
        ---
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
    </div>
  </div>

  <hr class="my-10" />


  <livewire:course-list />
@endsection