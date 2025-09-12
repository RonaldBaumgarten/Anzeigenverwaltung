<x-layout>

    <x-slot:heading>
        {{ $modelname }}
    </x-slot:heading>

    <x-slot:leadtext>
        Alle in unserer Datenbank gespeicherten  {{ $modelPlural }}
    </x-slot:leadtext>

    {{ $items }}

</x-layout>
