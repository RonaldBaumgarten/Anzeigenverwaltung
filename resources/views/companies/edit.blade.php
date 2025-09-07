<h1>Kategorie bearbeiten</h1>
<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')
    Farbe: <input type="text" name="catName" value="{{ $category->catName }}"><br>
    <button type="submit">Aktualisieren</button>
</form>
