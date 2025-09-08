<x-layout>

    <x-slot:heading>
        <h1>Firma bearbeiten</h1>
    </x-slot:heading>

    <x-slot>
    <form action="{{ route('companies.update', $company) }}" class="form-group" method="POST">
        @csrf
        @method('PUT')
        Firmenname: <input type="text" name="companyName" value="{{ $company->companyName }}" class="form-control"><br>
        Über die Firma: <input type="text" name="about" value="{{ $company->about }}" class="form-control"><br>
        <button type="submit" class="btn btn-primary">Aktualisieren</button>
    </form>
    </x-slot>

</x-layout>
