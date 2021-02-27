<div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Latest Courses</h1>
    <h3 class="text-lg text-gray-600">Educate yourself as an IT pro.</h3>
  </div>
  
<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <x-course-card :course="$course" />
    @endforeach
</div>
