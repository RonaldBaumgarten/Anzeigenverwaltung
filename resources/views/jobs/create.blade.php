<h1>Neue Kategorie</h1>
<form action="{{ route('jobs.store') }}" method="POST">
    @csrf
    Jobtitel: <input type="text" name="title"><br>
    Beschreibung der Tätigkeit: <input type="text" name="description"><br>
    Voraussetzungen: <input type="text" name="requiredSkills"><br>

        <label for="category_id" class="form-label">Kategorie</label>
            <select class="form-select" id="category_id" name="category_id" required>
                <option value="">Bitte wählen...</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->catName }}
                    </option>
                @endforeach
            </select><br>

        <label for="company_id" class="form-label">Firma</label>
            <select class="form-select" id="company_id" name="company_id" required>
                <option value="">Bitte wählen...</option>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
                        {{ $company->companyName }}
                    </option>
                @endforeach
            </select><br>

    <button type="submit">Speichern</button>
</form>
