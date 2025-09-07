<h1>Neue Kategorie</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    Farbe: <input type="text" name="catName"><br>
    <button type="submit">Speichern</button>
</form>
