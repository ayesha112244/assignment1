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
        <input type="text" name="trip_name"><br><br>

        <label>Destinations:</label><br>
        <input type="text" name="destinations"><br><br>

        <label>Overview:</label><br>
        <textarea name="overview" rows="3"></textarea><br><br>

        <label>Suggested Dates:</label><br>
        <input type="text" name="suggested_dates"><br><br>

        <label>Difficulty Level:</label><br>
        <input type="text" name="difficulty_level"><br><br>

        <label>Submitted By:</label><br>
        <input type="text" name="submitted_by"><br><br>

        <button type="submit">Save Itinerary</button>
    </form>

    <br>
    <a href="{{ route('itineraries.index') }}">← Back to All Itineraries</a>
</x-layout>
