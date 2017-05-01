<!--
This file contains a POST method form to create a new listing.

It gets the subcategory number, product title, price, and description, and inserts a row into the Listigns database table
with an autoincremented Lisitng ID as a primary Key.

Javascript handles errors.

//-->


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Listing</div>
                    <div class="panel-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{!! Session::get('success') !!}</div>
                        @endif
                        @if (Session::has('failure'))
                            <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('newlisting') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('sub_cat_id') ? ' has-error' : '' }}">
                                <label for="sub_cat_id" class="col-md-4 control-label">Sub Category</label>

                                <div class="col-md-6">
                                    <select id='sub_cat_id' class='form-control' name="sub_cat_id" required>
                                        <option value=1>Electronics/Phones</option>
                                        <option value=2>Electronics/TVs</option>
                                        <option value=3>Electronics/Computers</option>
                                        <option value=4>Electronics/Appliances</option>
                                        <option value=5>Electronics/Other</option>
                                        <option value=6>Clothing/Men's</option>
                                        <option value=7>Clothing/Women's</option>
                                        <option value=8>Clothing/Kid's</option>
                                        <option value=9>Automobiles/Cars</option>
                                        <option value=10>Automobiles/Trucks</option>
                                        <option value=11>Automobiles/Motorcycles</option>
                                        <option value=12>Automobiles/Other</option>
                                        <option value=13>Furniture/Kitchen</option>
                                        <option value=14>Furniture/Office</option>
                                        <option value=15>Furniture/Bedroom</option>
                                        <option value=16>Furniture/Other</option>
                                    </select>

                                    @if ($errors->has('sub_cat_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('sub_cat_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" required>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" name="description" required>

                                    </textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label">Price</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" step="any" class="form-control" name="price" required>

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create Listing
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
