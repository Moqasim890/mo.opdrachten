<x-layout>
    <x-slot:title>
        <h1>Jobs</h1>
    </x-slot:title>

    <p>Welcome to our jobs page. We are dedicated to providing the best job opportunities possible.</p>

     @foreach ($jobs as $job)
        <p>{{ $job['name'] }} - {{ $job['age'] }} - {{ $job['color'] }}</p>

    @endforeach
</x-layout>


