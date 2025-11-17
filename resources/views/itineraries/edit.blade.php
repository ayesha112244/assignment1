<x-layout>
    <h1>Edit Itinerary</h1>

    {{-- Error messages agar validation fail ho --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form start --}}
    <form action="{{ route('itineraries.update', $itinerary->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Trip Name:</label><br>
        <input type="text" name="trip_name" value="{{ $itinerary->trip_name }}"><br><br>

        <label>Country:</label><br>
        <input type="text" name="country" value="{{ $itinerary->country }}"><br><br>

        <label>Destinations:</label><br>
        <input type="text" name="destinations" value="{{ $itinerary->destinations }}"><br><br>

        <label>Overview:</label><br>
        <textarea name="overview" rows="3">{{ $itinerary->overview }}</textarea><br><br>

        <label>Suggested Dates:</label><br>
        <input type="text" name="suggested_dates" value="{{ $itinerary->suggested_dates }}"><br><br>

        <label>Difficulty Level:</label><br>
        <select name="difficulty_level">
            <option value="easy" {{ $itinerary->difficulty_level == 'easy' ? 'selected' : '' }}>Easy</option>
            <option value="medium" {{ $itinerary->difficulty_level == 'medium' ? 'selected' : '' }}>Medium</option>
            <option value="hard" {{ $itinerary->difficulty_level == 'hard' ? 'selected' : '' }}>Hard</option>
        </select><br><br>

        <label>Submitted By:</label><br>
        <input type="text" name="submitted_by" value="{{ $itinerary->submitted_by }}"><br><br>

        <button type="submit">Update Itinerary</button>
    </form>

    <br>
    <a href="{{ route('itineraries.index') }}">← Back to All Itineraries</a>
</x-layout>
