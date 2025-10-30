<x-layout>
    <x-slot:title>
        <h1>Jobs</h1>
    </x-slot:title>

    <p>Welcome to our jobs page. We are dedicated to providing the best job opportunities possible.</p>

     @foreach ($jobs as $job)
        <a href="/jobs{{ $job['id'] }}" class="text-black-500 hover:underline block my-2 py-6 border-gray-200 border-b">
             <div class="text-blue-500">{{ $job->employer->name }}</div>
            
            <div>
                  <strong>{{ $job['title'] }}</strong> PAYS: {{ $job['salary'] }} per year.
              </div>
        </a>

    @endforeach
</x-layout>


