<x-detail>

    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <x-slot:details>
        <p><h4>Die Tätigkeit:</h4>{{ $job->description }}</p>
        <p><h4>Welche Fähigkeiten du mitbringen solltest:</h4>{{ $job->requiredSkills }}</p>
        <p><h4>Firma:</h4>{{ $job->company->companyName }}</p>
        <p><h4>Kategorie:</h4>{{ $job->category->catName }}</p>
        <p><h4>Kontakt:</h4>{{ $job->user->email }}</p>

        @can('edit', $job)
        <a href="{{ route('jobs.edit', $job) }}" class="btn btn-outline-primary">Bearbeiten</a>
        @else
        <div class="btn disabled">Bearbeiten</div>
        @endcan
    </x-slot:details>

</x-detail>

