<x-detail>

    <x-slot:heading>
        {{ $company->companyName }}
    </x-slot:heading>

    <x-slot:details>
        <p><h4>Über die Firma:</h4>{{ $company->about }}</p>
        <p><h4>Kontakt:</h4>{{ $company->user->email }}</p>

        @can('update', $company)
        <a href="{{ route('companies.edit', $company) }}" class="btn btn-outline-primary">Bearbeiten</a>
        @else
        <div class="btn disabled">Bearbeiten</div>
        @endcan
    </x-slot:details>

</x-detail>

