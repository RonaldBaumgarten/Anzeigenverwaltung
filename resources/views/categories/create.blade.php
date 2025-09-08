<x-layout>

    <x-slot:heading>
        <h1>Neue Kategorie</h1>
    </x-slot:heading>

    <x-slot>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        Name der Kategorie: <input type="text" name="catName"><br>
        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
    </x-slot>

</x-layout>
