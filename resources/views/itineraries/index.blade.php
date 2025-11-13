<x-layout>
    <h1>All Itineraries</h1>

    @if ($itineraries->count() > 0)
        <ul>
            @foreach ($itineraries as $itinerary)
                <li>
                    <a href="{{ route('itineraries.show', $itinerary->id) }}">
                        {{ $itinerary->trip_name }}
                    </a>
                    <br>
                    <small>Destination: {{ $itinerary->destinations }}</small>
                </li>
            @endforeach
        </ul>
    @else
        <p>No itineraries found.</p>
    @endif
</x-layout>
