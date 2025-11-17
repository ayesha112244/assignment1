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
