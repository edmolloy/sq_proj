<!--

This file is the HTML markup the my listings page.



It retrieves each listing in through the database and displays that listings only if the categories match
this page's User's created listings.

Each listing contains a foreign key reference to the user who created that listing. Only listings that contain the
logged in user's Primary KEy ID will be pulled from the database.


//-->

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading"> {{ Auth::user()->name}}/My Listings </div>
                    <div class="panel-body">

                        @foreach ($listings as $listing)

                                <div class="row">
                                    <div class="col-lg-8 col-md-offset-2">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" align="center">
                                                {{ $listing->title }}
                                            </div>
                                            <div class="panel-body">
                                                <p>
                                                    {{ $listing->description }}
                                                </p>
                                                <p>
                                                    {{ $listing->price }}
                                                </p>
                                            </div>
                                            <div class="panel-footer" align="center">
                                                <a href="{{ url('updatelisting/' . $listing->id ) }}" class="btn btn-primary">Edit Listing</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
