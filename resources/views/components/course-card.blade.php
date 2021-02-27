<div class="bg-white shadow-lg rounded-lg mb-3">
    <a href="{{ route('course', $course->slug) }}">
        <img src="{{ $course->image }}" class="rounded-t-md"><!-- rounded-md -->
        <div class="px-4 py-4">
            <h2 class="text-lg text-gray-600 truncate font-medium mb-4" title="{{ $course->name }}">{{ $course->name }}</h2>
            <h3 class="text-md text-gray-500 mb-6">{{ $course->excerpt }}</h3>


            <div class="flex mt-3">
                <img src="{{ $course->user->avatar }}" class="h-10 w-10 object-cover rounded-full mr-2">
                <div>
                    <p class="text-gray-500 text-sm font-medium">{{ $course->user->name }}</p>
                    <p class="text-gray-500 text-sm" title="{{ $course->created_at->format('M jS, Y @ H:i') }}">{{ $course->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </a>
</div>