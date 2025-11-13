<!DOCTYPE html>
<html>
<head>
    <title>Travel Itineraries</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/itineraries/create') }}">Add new itinerary</a>
        <a href="{{ url('/about') }}">About</a>
    </nav>

    <hr>
    <div> 
        <!-- $slot will display the specific content for the page. -->
        {{ $slot }}
    </div>
</body>
</html>
