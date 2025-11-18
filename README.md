# CHT2520 Assignment 1 U2386691 Ayesha Sohail

# Travel Itinerary Web Application
A Laravel-based CRUD application for creating and exploring travel itinerary ideas.

## Introduction
This web application, Travel Itinerary Ideas, allows users to create, view, edit, and delete travel plans. The goal of the system is to provide a simple platform where users can share trip suggestions (e.g., “Explore Northern Pakistan” or “Weekend in Scotland”) and browse ideas submitted by others.

The application is built using Laravel 11, MySQL, and a single well-structured database table, fully meeting the requirements of Assignment 1. The app focuses on clean navigation, simple styling, validation, and proper use of Laravel MVC architecture. Additional features such as search, pagination, and a Blade component have been implemented as well.

The system stores all itineraries in a **single database table** named `itineraries`.

---

## Scenario Overview

In this scenario, users contribute itineraries describing possible trips. Each itinerary record contains:

- Trip Name  
- Country  
- Destinations  
- Overview  
- Suggested Dates  
- Difficulty Level  
- Submitted By  

These fields help users understand the nature of each travel plan. All itineraries are stored in a single database table `itineraries`.

---

## Database & Migrations
The database design follows **First Normal Form (1NF)**: each field stores a single, atomic value, and the table has a clear primary key.

The main migration creates the table, and an additional migration adds the country field:

```php
Schema::create('itineraries', function (Blueprint $table) {
    $table->id();
    $table->string('trip_name');
    $table->string('country');
    $table->string('destinations');
    $table->text('overview');
    $table->string('suggested_dates');
    $table->string('difficulty_level');
    $table->string('submitted_by');
    $table->timestamps();
});
```
This structure supports clean CRUD operations while staying within the “one table only” restriction.

## Database Seeder
To support easy setup during marking, a database seeder was created. The seeder automatically inserts three example itineraries into the `itineraries` table. This ensures the application has meaningful sample data immediately after running:

```
php artisan migrate:fresh --seed
```
>The seeder includes a variety of destinations, difficulty levels, and contributors. This demonstrates how real data appears in the system and allows the routes, views, and pagination features to be tested without requiring manual input.

- Example structure of the seeder:
```php
DB::table('itineraries')->insert([
    [
        'trip_name' => 'Discover Northern Pakistan',
        'destinations' => 'Hunza, Skardu, Gilgit',
        'overview' => 'A scenic 7-day journey through the valleys and mountains of Northern Pakistan.',
        'suggested_dates' => 'June - August',
        'difficulty_level' => 'Moderate',
        'submitted_by' => 'Ayesha Sohail',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    ...
]);

```
The seeder supports consistency, makes testing easier, and aligns with Laravel’s recommended approach for populating databases during development.

## Understanding MVC in This Project

Laravel uses the **Model–View–Controller (MVC)** architecture, and this application demonstrates it clearly.

---

## 1️. Model (Itinerary Model)

The **Itinerary model** represents the database table and communicates with MySQL using Eloquent ORM.

---

## 2️. Controller (ItineraryController)

The **ItineraryController** manages all logic, including search, pagination, validation, storing, updating, editing and deleting records.

### Example: Search + Pagination Logic

```php
$search = $request->input('search');

$itineraries = Itinerary::when($search, function ($query, $search) {
    return $query->where('destinations', 'like', '%' . $search . '%');
})->paginate(3);
```

### Example of Laravel validation:
```php
$request->validate([
    'trip_name' => 'required',
    'country' => 'required',
    'destinations' => 'required',
    'overview' => 'required',
    'suggested_dates' => 'required',
    'difficulty_level' => 'required',
    'submitted_by' => 'required',
]);
```

## 3️. Views (Blade Templates)
All user-facing pages are built using Blade.
The main view displays itineraries with pagination:

```php
@foreach ($itineraries as $item)
    <tr>
        <td>{{ $item->trip_name }}</td>
        <td>{{ $item->country }}</td>
        <td>{{ $item->destinations }}</td>
        <td>{{ $item->difficulty_level }}</td>
    </tr>
@endforeach

{{ $itineraries->links() }}
```
This keeps the interface clean, readable, and compliant with the assignment requirement of CSS-only styling.

# Routes

The application uses RESTful resource routes:

```php
Route::get('/', [ItineraryController::class, 'index']);
Route::resource('itineraries', ItineraryController::class);
```
This ensures clean navigation and proper URL structure for all CRUD features.

# Use of Laravel Components (Additional Feature)
To improve maintainability, a Blade component was created for the navigation bar:

```php
<x-navbar />
```
This reduces repetition across pages and demonstrates deeper understanding of Laravel features beyond the basic requirements.

## Design & Usability Practices

Although no CSS frameworks were allowed, the app includes:

- Clean spacing

- Responsive card/grid layout

- Readable fonts

- Good contrast

- Persistent navigation

- Feedback messages (success alerts)

These choices improve user experience and demonstrate attention to usability principles.

## Additional Features Implemented 

The application includes all bonus features:

- Search functionality
- Pagination
- Laravel validation
- Blade component (navbar)
- User-friendly styling
- Clear navigation and layout

## Conclusion
This project successfully implements a complete Laravel CRUD application using a single table, demonstrating strong understanding of MVC, migrations, Blade, and Laravel core features. Extra enhancements such as search, pagination, validation, and component usage elevate the project quality and align with the assignment’s criteria. The app is simple, structured, and easy to use.