<!--

This is a practice file for pulling information from the databse and displaying it
on a page.

disregard.


//-->
@foreach ($listings as $listing)
    <h1> {{ $listing->title }} </h1>
    <h1> {{ $listing->id }}</h1>
    <h1> {{ $listing->sub_cat_id }}</h1>
    <h1> {{ $listing->price }}</h1>
    <h1> {{ $listing->description }}</h1>

@endforeach
