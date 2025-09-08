<x-index>

    <x-slot:heading>
        Firmen
    </x-slot:heading>

    <x-slot:items>
        <p><a href="{{ route('companies.create') }}" class="btn btn-primary">Neue Firma anlegen</a></p>
        <ul class="list-group list-group-hover">
            @foreach($companies as $company)
                <li class="list-group-item">
                        <strong>{{ $company->companyName }}</strong>
                        <a href="{{ route('companies.show', $company) }}" class="btn btn-outline-primary">Details ansehen</a>
                        <a href="{{ route('companies.edit', $company) }}" class="btn btn-outline-primary">Bearbeiten</a>
                    <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-warning">Löschen</button>
                    </form>
                </li>
            @endforeach


        </ul>
    </x-slot:items>

</x-index>
