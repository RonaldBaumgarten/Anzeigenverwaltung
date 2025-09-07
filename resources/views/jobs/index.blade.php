<x-layout>
    <x-slot:heading>
        Stellenanzeigen
    </x-slot:heading>

    <x-slot:items>
        <a href="{{ route('jobs.create') }}">Neue Anzeige anlegen</a>
        <ul>
            @foreach($jobs as $job)
                <li>
                    {{ $job->title }} - ist der title
                    <a href="{{ route('jobs.edit', $job) }}">Bearbeiten</a>
                    <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Löschen</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </x-slot:items>

</x-layout>
