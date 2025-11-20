<x-layout>

    <div class="form-page-container">

        <h1 class="form-title">Edit Itinerary</h1>

        <div class="form-card">
            <form action="{{ route('itineraries.update', $itinerary->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label class="form-label">Trip Name <span class="required">*</span></label>
                <input type="text" name="trip_name" class="form-input" value="{{ $itinerary->trip_name }}">
                @error('trip_name')
                    <p class="field-error">{{ $message }}</p>
                @enderror

                <label class="form-label">Country <span class="required">*</span></label>
                <input type="text" name="country" class="form-input" value="{{ $itinerary->country }}">
                @error('country')
                    <p class="field-error">{{ $message }}</p>
                @enderror

                <label class="form-label">Destinations <span class="required">*</span></label>
                <input type="text" name="destinations" class="form-input" value="{{ $itinerary->destinations }}">
                @error('destinations')
                    <p class="field-error">{{ $message }}</p>
                @enderror

                <label class="form-label">Overview <span class="required">*</span></label>
                <textarea name="overview" rows="3" class="form-textarea">{{ $itinerary->overview }}</textarea>
                @error('overview')
                    <p class="field-error">{{ $message }}</p>
                @enderror

                <label class="form-label">Suggested Dates <span class="required">*</span></label>
                <input type="text" name="suggested_dates" class="form-input" value="{{ $itinerary->suggested_dates }}">
                @error('suggested_dates')
                    <p class="field-error">{{ $message }}</p>
                @enderror

                <label class="form-label">Difficulty Level <span class="required">*</span></label>
                <select name="difficulty_level" class="form-select">
                    <option value="easy" {{ $itinerary->difficulty_level == 'easy' ? 'selected' : '' }}>Easy</option>
                    <option value="medium" {{ $itinerary->difficulty_level == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="hard" {{ $itinerary->difficulty_level == 'hard' ? 'selected' : '' }}>Hard</option>
                </select>
                @error('difficulty_level')
                    <p class="field-error">{{ $message }}</p>
                @enderror

                <label class="form-label">Submitted By <span class="required">*</span></label>
                <input type="text" name="submitted_by" class="form-input" value="{{ $itinerary->submitted_by }}">
                @error('submitted_by')
                    <p class="field-error">{{ $message }}</p>
                @enderror

                <button type="submit" class="form-btn">Update Itinerary</button>
            </form>
        </div>

        <a href="{{ route('itineraries.index') }}" class="back-link">← Back to All Itineraries</a>
    </div>

</x-layout>
