<x-layout>

    <h1 class="page-title">All Itineraries</h1>
    <hr>

    @if ($itineraries->count() > 0)

        <div class="card-container">
            @foreach ($itineraries as $itinerary)
                <div class="card">
                    <h3>{{ $itinerary->trip_name }}</h3>
                    <p><strong>Destination:</strong> {{ $itinerary->destinations }}</p>

                    <a href="{{ route('itineraries.show', $itinerary->id) }}" class="card-btn">
                        View Details
                    </a>
                </div>
            @endforeach
        </div>

        {{ $itineraries->links() }}

    @else
        <p>No itineraries found.</p>
    @endif

</x-layout>
