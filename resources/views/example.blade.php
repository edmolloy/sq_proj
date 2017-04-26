@foreach ($listings as $listing)
    <h1> {{ $listing->title }} </h1>
    <h1> {{ $listing->id }}</h1>
    <h1> {{ $listing->sub_cat_id }}</h1>
    <h1> {{ $listing->price }}</h1>
    <h1> {{ $listing->description }}</h1>

@endforeach
