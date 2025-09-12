<x-index>

    <x-slot:modelname>
        Jobs
    </x-slot:modelname>

    <x-slot:modelPlural>
        Stellenanzeigen
    </x-slot:modePplural>


    <x-slot:items>
        @if (Auth::user())
        <p><a href="{{ route('jobs.create') }}" class="btn btn-primary">Neue Anzeige anlegen</a></p>
        @else
        <p><a href="{{ route('login') }}" class="btn btn-info">Einloggen, um neue Anzeige anzulegen</a></p>
        @endif
        <ul class="list-group list-group-hover">
            @foreach($jobs as $job)
                <li class="list-group-item">
                    <strong>{{ $job->title }}</strong>
                    <a href="{{ route('jobs.show', $job) }}" class="btn btn-outline-primary">Details ansehen</a>
                    
                    @if (Auth::user())
                    <a href="{{ route('jobs.edit', $job) }}" class="btn btn-outline-primary">Bearbeiten</a>
                    <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-warning">Löschen</button>
                    </form>
                    @endif
                </li>
            @endforeach
        </ul>
    </x-slot:items>

</x-index>
