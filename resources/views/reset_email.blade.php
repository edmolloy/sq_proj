@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Change Email</div>
                    <div class="panel-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{!! Session::get('success') !!}</div>
                        @endif
                        @if (Session::has('failure'))
                            <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                        @endif
                        <form action="" method="post" role="form" class="form-horizontal">
                            {{csrf_field()}}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">New Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email_confirmation') ? ' has-error' : '' }}">
                                <label for="email-confirm" class="col-md-4 control-label">Confirm Email</label>

                                <div class="col-md-6">
                                    <input id="email-confirm" type="email" class="form-control" name="email_confirmation">

                                    @if ($errors->has('email_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email_confirmation') }}</strong>
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