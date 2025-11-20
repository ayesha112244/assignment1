<x-layout>

<div class="detail-container">

    <h1 class="detail-title">{{ $itinerary->trip_name }}</h1>

    <div class="detail-box">

        <p><span class="label">Country:</span> {{ $itinerary->country }}</p>
        <p><span class="label">Destinations:</span> {{ $itinerary->destinations }}</p>
        <p><span class="label">Overview:</span> {{ $itinerary->overview }}</p>
        <p><span class="label">Suggested Dates:</span> {{ $itinerary->suggested_dates }}</p>
        <p><span class="label">Difficulty Level:</span> {{ $itinerary->difficulty_level }}</p>
        <p><span class="label">Submitted By:</span> {{ $itinerary->submitted_by }}</p>

        <div class="detail-buttons">
             <a href="{{ route('itineraries.edit', $itinerary->id) }}" class="btn edit-btn">Edit</a>

            <form action="{{ route('itineraries.destroy', $itinerary->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn delete-btn" onclick="return confirm('Are you sure you want to delete this itinerary?');">
                    Delete
                </button>
              </form>
        </div>
     <a href="{{ route('itineraries.index') }}" class="back-link">← Back to All Itineraries</a>

    </div>

</div>

</x-layout>
