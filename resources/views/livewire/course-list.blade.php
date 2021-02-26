<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <div class="bg-white shadow-lg rounded-lg mb-3">
            <a href="#">
                <img src="{{ $course->image }}" class="rounded-t-md"><!-- rounded-md -->
                <div class="px-4 py-4">
                    <h2 class="text-lg text-gray-600 truncate font-medium mb-4" title="{{ $course->name }}">{{ $course->name }}</h2>
                    <h3 class="text-md text-gray-500 mb-6">{{ $course->excerpt }}</h3>

                    <div class="mt-4 relative text-gray-600">
                        <img src="{{ $course->user->avatar }}" class="rounded-full h-16 w-15 inline mr-2">

                        <div class="inline-block align-top mt-1">
                            <span class="font-medium">{{ $course->user->name }}</span>
                            <br />
                            <span class=" text-gray-500 text-sm">{{ $course->created_at->format('M jS, Y') }}</span>
                        </div>
                        
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
