# CHT2520 Assignment 1 U2386691 Ayesha Sohail

# Travel Itinerary Web Application
A Laravel-based CRUD application for creating and exploring travel itinerary ideas.

## Introduction
This web application, Travel Itinerary Ideas, allows users to create, view, edit, and delete travel plans. The goal of the system is to provide a simple platform where users can share trip suggestions (e.g., “Explore Northern Pakistan” or “Weekend in Scotland”) and browse ideas submitted by others.

The application is built using Laravel 11, MySQL, and a single well-structured database table, fully meeting the requirements of Assignment 1. The app focuses on clean navigation, simple styling, validation, and proper use of Laravel MVC architecture. Additional features such as search, pagination, and a Blade component have been implemented as well.

---

## Scenario Overview  
Users contribute itineraries describing possible trips. Each itinerary contains:

- Trip Name  
- Country  
- Destinations  
- Overview  
- Suggested Dates  
- Difficulty Level  
- Submitted By  

---

## Database Summary
This project uses **one database table** called `itineraries`.

The table stores all the required fields for an itinerary:

- trip_name  
- country  
- destinations  
- overview  
- suggested_dates  
- difficulty_level  
- submitted_by  

Only one migration is used to create this table.
A small database seeder is included to automatically insert multiple sample itineraries (around 12 records).
This helps the viewer to quickly test features like:

- Search  
- Pagination  
- CRUD  
- Layout & data flow  

without manually adding records.

# Understanding MVC in This Project  
This application clearly applies the **Model–View–Controller (MVC)** architecture.  
Below is a more detailed explanation of this architecture:

---

## **1. Model – The Itinerary Model**
The **Model** represents the structure of the database table and handles communication with MySQL using Eloquent ORM.

**Model responsibilities in this project:**  
- Defines the table name  
- Defines which fields can be mass-assigned  
- Represents each itinerary as an object  
- Interacts with the database when creating, updating, or deleting records  

### Example (Itinerary.php)
```php
class Itinerary extends Model
{
    protected $table = 'itineraries';

    protected $fillable = [
        'trip_name',
        'country',
        'destinations',
        'overview',
        'suggested_dates',
        'difficulty_level',
        'submitted_by',
    ];
}
```

This allows the controller to simply call:  
```php
Itinerary::create($request->all());
```

---

## **2. Controller – ItineraryController**
The **Controller** contains all application logic.  
It acts as the "middle layer" between the model and the views.

### Controller Responsibilities:
- Fetch itineraries from the database  
- Apply search filtering  
- Paginate results  
- Validate data  
- Store new itineraries  
- Update existing ones  
- Delete itineraries  
- Pass data to the Blade templates  

### Example: Search + Pagination
```php
$search = $request->input('search');

$itineraries = Itinerary::when($search, function ($query, $search) {
    return $query->where(function ($q) use ($search) {
        $q->where('destinations', 'like', '%' . $search . '%')
          ->orWhere('country', 'like', '%' . $search . '%');
    });
})->paginate(3);

return view('itineraries.index', compact('itineraries'));
```

### Example: Validation
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

---

## **3. Views – Blade Templates**
The **View** displays data to the user.  
Blade is used to generate clean, readable, user-friendly pages.

### Example: Displaying Records With Pagination
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

Views also include:

- Cards layout  
- Feedback messages  
- Search results messages  
- Reusable Navbar Component  

---

# Routes  
The application uses clean RESTful routes:

```php
Route::get('/', [ItineraryController::class, 'index']);
Route::resource('itineraries', ItineraryController::class);
```

This automatically handles:

- /itineraries (list)  
- /itineraries/create  
- /itineraries/{id}/edit  
- /itineraries/{id} (show)  
- POST, PUT, DELETE actions  

---

# Use of Laravel Components
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