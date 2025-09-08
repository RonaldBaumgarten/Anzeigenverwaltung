<x-layout>
    <x-slot:heading>
        Stellenanzeigen
    </x-slot:heading>

    <x-slot:items>
        <p><a href="{{ route('jobs.create') }}" class="btn btn-primary">Neue Anzeige anlegen</a></p>
        <ul class="list-group list-group-hover">
            @foreach($jobs as $job)
                <li class="list-group-item">
                    <strong>{{ $job->title }}</strong>
                    <a href="{{ route('jobs.edit', $job) }}" class="btn btn-outline-primary">Bearbeiten</a>
                    <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-warning">Löschen</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </x-slot:items>

</x-layout>
