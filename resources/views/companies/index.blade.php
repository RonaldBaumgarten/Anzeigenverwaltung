<x-index>

    <x-slot:heading>
        Firmen
    </x-slot:heading>
    <x-slot:items>
        <div class="container-lg" style="max-width: 800px">
            <div class="row mb-3"> 
                <div class="col"> 
                    @if (Auth::user())
                    <p><a href="{{ route('companies.create') }}" class="btn btn-primary">Neue Firma anlegen</a></p>
                    @else
                    <p><a href="{{ route('login') }}" class="btn btn-info">Einloggen, um neue Firma anzulegen</a></p>
                    @endif
                </div>
            </div>
        </div>
        <div class="container-lg" style="max-width: 800px">
            <div class="row mb-3"> 
            @foreach($companies as $company)
                <div class="feature col-lg-6 themed-grid-col">
                    <h3 class="fs-2 text-body-emphasis">{{ $company->companyName }}</h3>
                    <a href="{{ route('companies.show', $company) }}" class="btn btn-primary">Details ansehen</a>
                    @if (Auth::user())
                    <a href="{{ route('companies.edit', $company) }}" class="btn btn-primary">Bearbeiten</a>
                    <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Löschen</button>
                    @endif
                </div> 
            @endforeach
            </div>
        </div>

    </x-slot:items>

</x-index>
