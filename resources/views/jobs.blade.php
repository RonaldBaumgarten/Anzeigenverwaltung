<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <div>Hello from Job Page</div>
    @foreach ($jobs as $job)
        <li>
            <a href="/job/{{ $job['id'] }}">
                {{ $job['title'] }}
            </a>
        </li>
    @endforeach

</x-layout>
