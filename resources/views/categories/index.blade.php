<x-index>

    <x-slot:heading>
        Kategorien
    </x-slot:heading>


    <x-slot:items>
        @if (Auth::user())
        <p><a href="{{ route('categories.create') }}" class="btn btn-primary">Neue Kategorie anlegen</a></p>
        @else
        <p><a href="{{ route('login') }}" class="btn btn-info">Einloggen, um neue Kategorie anzulegen</a></p>
        @endif
        <ul class="list-group list-group-hover">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <strong>{{ $category->catName }}<strong>
                    <!--
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-outline-primary">Bearbeiten</a>
                    --> 
                    @if (Auth::user())
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
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
