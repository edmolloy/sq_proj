@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Search for Listings</div>
                    <div class="panel-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{!! Session::get('success') !!}</div>
                        @endif
                        @if (Session::has('failure'))
                            <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                        @endif
                        <form action="" method="post" role="form" class="form-horizontal">
                            {{csrf_field()}}

                            <div class="form-group{{ $errors->has('search') ? ' has-error' : '' }}">
                                <label for="search" class="col-md-4 control-label">Listing Keyword</label>

                                <div class="col-md-6">
                                    <input id="search" type="text" class="form-control" name="search">

                                    @if ($errors->has('search'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('search') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection