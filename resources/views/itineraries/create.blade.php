<x-layout>
    <h1>Add a New Itinerary</h1>

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
    <form action="{{ route('itineraries.store') }}" method="POST">
        @csrf

        <label>Trip Name:</label><br>
        <input type="text" name="trip_name" value="{{ old('trip_name') }}"><br><br>

        <label>Country:</label><br>
        <input type="text" name="country" value="{{ old('country') }}"><br><br>

        <label>Destination:</label><br>
        <input type="text" name="destinations" value="{{ old('destinations') }}"><br><br>

        <label>Overview:</label><br>
        <textarea name="overview" rows="3">{{ old('overview') }}</textarea><br><br>

        <label>Suggested Dates:</label><br>
        <input type="text" name="suggested_dates" value="{{ old('suggested_dates') }}"><br><br>

        <label>Difficulty Level:</label><br>
        <select name="difficulty_level">
            <option value="">Select level</option>
            <option value="easy" {{ old('difficulty_level') == 'easy' ? 'selected' : '' }}>Easy</option>
            <option value="medium" {{ old('difficulty_level') == 'medium' ? 'selected' : '' }}>Medium</option>
            <option value="hard" {{ old('difficulty_level') == 'hard' ? 'selected' : '' }}>Hard</option>
        </select><br><br>

        <label>Submitted By:</label><br>
        <input type="text" name="submitted_by" value="{{ old('submitted_by') }}"><br><br>

        <button type="submit">Save Itinerary</button>
    </form>

    <br>
    <a href="{{ route('itineraries.index') }}">← Back to All Itineraries</a>
</x-layout>
