@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading"> Electronics/Other </div>
                    <div class="panel-body">

                        @foreach ($listings as $listing)
                            @if ($listing->sub_cat_id == 5 and $listing->user_id != Auth::user()->id)

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
                                                <a href="{{ url('addtowatchlist/' . $listing->id) }}" class="btn btn-primary">
                                                    Add to Watch List
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                            @endif
                         @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
