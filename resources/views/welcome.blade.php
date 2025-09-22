<x-layout>
    <x-slot:title>
        <h1>Welcome to Our Website</h1>
    </x-slot:title>

    <p>We are glad to have you here. Explore our services and offerings.</p>
    <p>Feel free to reach out if you have any questions.</p>
    <p>Thank you for visiting our website!</p>
    <p>We hope to see you again soon.</p>
     @foreach ($title as $item)
         <p>{{ $item['name'] }}</p>
         <p>{{ $item['age'] }}</p>
         <p>{{ $item['color'] }}</p>
        
     @endforeach


    
</x-layout>
