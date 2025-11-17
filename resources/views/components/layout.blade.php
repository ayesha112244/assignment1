<!DOCTYPE html>
<html>
<head>
    <title>Travel Itineraries</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Navbar Component -->
    <x-navbar />

    <div> 
        <!-- $slot will display the specific content for the page. -->
        {{ $slot }}
    </div>
</body>
</html>
