# Travel Itinerary Ideas — Laravel CRUD Web App

A Laravel web application where users can **create, browse, search, edit and delete travel itinerary ideas**, such as "Explore Northern Pakistan" or "Weekend in Scotland". It was built to demonstrate a clean **MVC architecture**, RESTful routing, validation and reusable Blade components.

> Part 1 of a two-part project. The extended version, with authentication, reviews and a Tailwind UI, is **[Earth Trekkers](https://github.com/ayesha112244/earth-trekkers)**.
>
> Coursework for Advanced Web Programming (CHT2520), University of Huddersfield, 2025.

---

## Features

- **Full CRUD:** create, view, edit and delete itineraries
- **Search** itineraries by destination or country
- **Pagination** for easy browsing
- **Server-side validation** with error messages on every form
- **Success feedback messages** after each action
- **Reusable Blade components** for the layout and navbar
- **Database seeder** with 12 sample itineraries, ready for testing
- **Responsive card layout** styled with custom CSS (no CSS framework)

Each itinerary stores a trip name, country, destinations, overview, suggested dates, difficulty level and the name of the person who submitted it.

---

## Architecture (MVC)

| Layer | Implementation |
|---|---|
| **Model** | `Itinerary`, an Eloquent model with mass-assignment protection |
| **Controller** | `ItineraryController` handles listing, search, pagination, validation, create, update and delete |
| **Views** | Blade templates (`index`, `show`, `create`, `edit`) plus `<x-layout>` and `<x-navbar>` components |
| **Routes** | RESTful resource routes via `Route::resource('itineraries', ...)` |
| **Database** | MySQL with an `itineraries` table, created through migrations and filled by a seeder |

### Search and pagination example
```php
$itineraries = Itinerary::when($search, function ($query, $search) {
    return $query->where(function ($q) use ($search) {
        $q->where('destinations', 'like', "%{$search}%")
          ->orWhere('country', 'like', "%{$search}%");
    });
})->paginate(3);
```

---

## Tech Stack

`Laravel 12` · `PHP 8.2+` · `MySQL` · `Blade` · `Eloquent ORM` · `HTML/CSS`

---

## Getting Started

**Requirements:** PHP 8.2+, Composer, MySQL (e.g. via XAMPP)

```bash
git clone https://github.com/ayesha112244/travel-itinerary-ideas.git
cd travel-itinerary-ideas

composer install
cp .env.example .env
php artisan key:generate
```

Create a MySQL database, then update the `DB_` settings in `.env`.

```bash
php artisan migrate --seed
php artisan serve
```

Open **http://127.0.0.1:8000**

---

## What's Next

This project was extended into **[Earth Trekkers](https://github.com/ayesha112244/earth-trekkers)**, which adds user authentication, role-based authorization, a reviews system, a Destinations and Countries module, and a Tailwind CSS + Alpine.js interface.

---

**Author:** Ayesha Sohail · [GitHub](https://github.com/ayesha112244)
