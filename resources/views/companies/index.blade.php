<x-layout>
    <x-slot:heading>
        Firmen
    </x-slot:heading>

    <x-slot:items>
        <a href="{{ route('companies.create') }}">Neue Firma anlegen</a>
        <ul>
            <li>
                erstes Listitem
            </li>
            @foreach($companies as $company)
                <li>
                    {{ $company->companyName }} - ist der companyName
                    <a href="{{ route('companies.edit', $company) }}">Bearbeiten</a>
                    <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Löschen</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </x-slot:items>

</x-layout>
