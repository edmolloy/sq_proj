<!--

This file is the HTML markup for the wath listings section.

This page retrieves each listing from the Watch Listings table of the dtabase, and displays the listings so users
do not have to re-find listings which they have previously found and found interesting.

It retrieves each listing in through the database and displays that listings only if the categories match
this User's ID.

//-->

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading"> {{ Auth::user()->name}}/Listings on Watch </div>
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

                                                <a href="{{ url('removefromwatchlist/' . $listing->id) }}" class="btn btn-primary">
                                                    Remove from Watch List
                                                </a>
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
