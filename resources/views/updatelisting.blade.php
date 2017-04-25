
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Update Listing</div>
                    <div class="panel-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{!! Session::get('success') !!}</div>
                        @endif
                        @if (Session::has('failure'))
                            <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                        @endif

                            <form action="" method="post" role="form" class="form-horizontal">
                            {{csrf_field()}}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label"> Title </label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $listing->title }}">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label"> Description </label>

                                <div class="col-md-6">
                                    <textarea id="description" rows="5" type="text" class="form-control" name="description">
                                        {{ trim($listing->description) }}
                                    </textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label"> Price </label>

                                <div class="col-md-6">
                                    <input id="price" type="number" step="a" class="form-control" name="price" value={{$listing->price}}>

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
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


