<x-layout>
    <h2>Currently Available Ninjas</h2>
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="($ninja['age'] > 30)">
                    <h3>{{ $ninja['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

</x-layout>