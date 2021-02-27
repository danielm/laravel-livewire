<div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Latest Courses</h1>
    <h3 class="text-lg text-gray-600">Educate yourself as an IT pro.</h3>
  </div>
  
<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <div class="bg-white shadow-lg rounded-lg mb-3">
            <a href="{{ route('course', $course->slug) }}">
                <img src="{{ $course->image }}" class="rounded-t-md"><!-- rounded-md -->
                <div class="px-4 py-4">
                    <h2 class="text-lg text-gray-600 truncate font-medium mb-4" title="{{ $course->name }}">{{ $course->name }}</h2>
                    <h3 class="text-md text-gray-500 mb-6">{{ $course->excerpt }}</h3>


                    <div class="flex mt-3">
                        <img src="{{ $course->user->avatar }}" class="h-10 w-10 rounded-full mr-2">
                        <div>
                            <p class="text-gray-500 text-sm font-medium">{{ $course->user->name }}</p>
                            <p class="text-gray-500 text-sm" title="{{ $course->created_at->format('M jS, Y @ H:i') }}">{{ $course->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
