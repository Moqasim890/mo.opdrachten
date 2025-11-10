<x-layout>
    <x-slot:title>
        <h1>Jobs</h1>
    </x-slot:title>

    <p>Welcome to our jobs page. We are dedicated to providing the best job opportunities possible.</p>

     @foreach ($jobs as $job)
        <p href="/jobs{{ $job['id'] }}" class="text-black-500 hover:underline block my-2 py-6 border-gray-200 border-b">
             <div class="text-blue-500">{{ $job->employer->name }}</div>
            
            <div>
                  <strong>{{ $job['title'] }}</strong> PAYS: {{ $job['salary'] }} per year.
              </div>
               <a href="{{ route('jobs.edit', $job->id) }}" class="text-indigo-600 hover:underline">Edit</a>

            </p>

    @endforeach

   


    <div>{{ $jobs->links() }}</div>




</x-layout>


