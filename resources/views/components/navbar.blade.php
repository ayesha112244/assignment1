<nav class="navbar">
    <div class="nav-left">
        <h2 class="logo">TripNest</h2>
    </div>

    <div class="nav-center">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/itineraries/create') }}">Create New Itinerary</a>
        <a href="{{ url('/about') }}">About</a>
    </div>

    <form action="{{ url('/') }}" method="GET" class="nav-search">
        <input type="text" name="search"
               placeholder="Search destination..."
               value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>
</nav>
<hr>
