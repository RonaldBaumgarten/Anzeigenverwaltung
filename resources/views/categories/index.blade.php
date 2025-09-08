<x-index>

    <x-slot:heading>
        Kategorien
    </x-slot:heading>


    <x-slot:items>
        <p><a href="{{ route('categories.create') }}" class="btn btn-primary">Neue Kategorie anlegen</a></p>
        <ul class="list-group list-group-hover">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <strong>{{ $category->catName }}<strong>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-outline-primary">Bearbeiten</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-warning">Löschen</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </x-slot:items>

</x-index>
