<x-layout>

    <h1 class="page-title">All Itineraries</h1>
    <hr>

   {{-- Search Feedback --}}
    @if(request('search'))
        <div class="search-feedback fancy-feedback">

            @if ($itineraries->count() > 0)
                <p class="feedback-success">
                    <strong>Search results for:</strong> 
                    <span class="highlight">"{{ request('search') }}"</span>
                </p>
            @else
                <p class="feedback-error">
                    <strong>No results found for:</strong> 
                    <span class="highlight">"{{ request('search') }}"</span>
                </p>
            @endif

        </div>
    @endif

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

        {{-- Keep search text during pagination --}}
        {{ $itineraries->appends(['search' => request('search')])->links() }}

    @else
        {{-- Only show this message when user didn't search --}}
        @unless(request('search'))
            <p>No itineraries found.</p>
        @endunless
    @endif

</x-layout>
