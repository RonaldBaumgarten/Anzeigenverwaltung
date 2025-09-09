<x-index>

    <x-slot:heading>
        Firmen
    </x-slot:heading>

    <x-slot:items>
        @if (Auth::user())
        <p><a href="{{ route('companies.create') }}" class="btn btn-primary">Neue Firma anlegen</a></p>
        @else
        <p><a href="{{ route('login') }}" class="btn btn-info">Einloggen, um neue Firma anzulegen</a></p>
        @endif

        <div class="container-lg">
            @foreach($companies as $company)
            <div class="row mb-3"> 
                <div class="col-sm-4 themed-grid-col"><strong>{{ $company->companyName }}</strong></div> 
                <div class="col-sm-4 themed-grid-col mx-auto">
                    <a href="{{ route('companies.show', $company) }}" class="btn btn-outline-primary">Details ansehen</a>
                </div> 
                @if (Auth::user())
                <div class="col-md-2 themed-grid-col">
                    <a href="{{ route('companies.edit', $company) }}" class="btn btn-outline-primary">Bearbeiten</a>
                </div> 
                <div class="col-lg-2 themed-grid-col">
                    <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-warning">Löschen</button>
                </div> 
                @endif
            </div>
            @endforeach
        </div>


<!--
        <ul class="list-group list-group-hover">
            @foreach($companies as $company)
                <li class="list-group-item">
                        <strong>{{ $company->companyName }}</strong>
                        <a href="{{ route('companies.show', $company) }}" class="btn btn-outline-primary">Details ansehen</a>
                        @if (Auth::user())
                        <a href="{{ route('companies.edit', $company) }}" class="btn btn-outline-primary">Bearbeiten</a>
                        <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-warning">Löschen</button>
                        @endif
                    </form>
                </li>
            @endforeach
        </ul>
-->
    </x-slot:items>

</x-index>
