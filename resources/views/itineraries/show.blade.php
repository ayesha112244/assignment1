<x-layout>
    <h1>{{ $itinerary->trip_name }}</h1>

    <p><strong>Destinations:</strong> {{ $itinerary->destinations }}</p>
    <p><strong>Overview:</strong> {{ $itinerary->overview }}</p>
    <p><strong>Suggested Dates:</strong> {{ $itinerary->suggested_dates }}</p>
    <p><strong>Difficulty Level:</strong> {{ $itinerary->difficulty_level }}</p>
    <p><strong>Submitted By:</strong> {{ $itinerary->submitted_by }}</p>

    <br>

    {{-- Edit Button --}}
    <a href="{{ route('itineraries.edit', $itinerary->id) }}">
        <button>Edit</button>
    </a>

    {{-- Delete Button --}}
    <form action="{{ route('itineraries.destroy', $itinerary->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this itinerary?');">
            Delete
        </button>
    </form>

    <br><br>
    <a href="{{ route('itineraries.index') }}">← Back to All Itineraries</a>
</x-layout>
