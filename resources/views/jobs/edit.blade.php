<x-layout>

    <x-slot:heading>
        <h1>Job bearbeiten</h1>
    </x-slot:heading>

    <x-slot>
        <form action="{{ route('jobs.update', $job) }}" class="form-group" method="POST">
            @csrf
            @method('PUT')
            Jobtitel: <input type="text" name="title" value="{{ $job->title }}" class="from-control"><br>
            Beschreibung der Tätigkeit: <input type="text" name="description" value="{{ $job->description }}" class="from-control"><br>
            Voraussetzungen: <input type="text" name="requiredSkills" value="{{ $job->requiredSkills }}" class="from-control"><br>

            <label for="category_id" class="form-label" class="from-control">Kategorie:</label>
            <select class="form-select" id="category_id" name="category_id" required>
                <option value="{{ $job->category->id }}">{{ $job->category->catName }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->catName }}
                    </option>
                @endforeach
            </select><br>

            <label for="company_id" class="form-label">Firma:</label>
            <select class="form-select" id="company_id" name="company_id" required>
                <option value="{{ $job->company->id }}">{{ $job->company->companyName }}</option>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
                        {{ $company->companyName }}
                    </option>
                @endforeach
            </select><br>

            <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
    </x-slot>

</x-layout>
