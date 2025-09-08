
<x-layout>

    <x-slot:heading>
        <h1>Neue Firma</h1>
    </x-slot:heading>

    <x-slot>
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        Name der Firma: <input type="text" name="companyName"><br>
        Beschreibung der Firma: <input type="text" name="about"><br>
        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
    </x-slot>
</x-layout>
