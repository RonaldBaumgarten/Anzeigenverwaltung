<h1>Kategorie bearbeiten</h1>
<form action="{{ route('companies.update', $company) }}" method="POST">
    @csrf
    @method('PUT')
    Farbe: <input type="text" name="companyName" value="{{ $company->companyName }}"><br>
    <button type="submit">Aktualisieren</button>
</form>
