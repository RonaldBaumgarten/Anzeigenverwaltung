<h1>Neue Firma</h1>
<form action="{{ route('companies.store') }}" method="POST">
    @csrf
    Name der Firma: <input type="text" name="companyName"><br>
    Beschreibung der Firma: <input type="text" name="about"><br>
    <button type="submit">Speichern</button>
</form>
