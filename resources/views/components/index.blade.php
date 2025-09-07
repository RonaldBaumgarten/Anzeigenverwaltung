<x-layout>
    <x-slot:heading>
        Categories Page
    </x-slot:heading>

    <x-slot:items>
        <ul>
            <li>
                erstes Listitem
            </li>
            @foreach($categories as $category)
                <li>
                    {{ $category->catName }} - ist der catName
                    <a href="{{ route('categories.edit', $category) }}">Bearbeiten</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Löschen</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </x-slot:items>

    <div>Hello from CATEGORY Page</div>
</x-layout>
