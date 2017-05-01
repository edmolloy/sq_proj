<!--

This is a practice file for pulling information from the databse and displaying it
on a page.

disregard.


//-->

@foreach ($listings as $listing)
    <p> {{ $listing->title }}</p>
@endforeach