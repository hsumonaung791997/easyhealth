@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Edit
        </h1>
        <span class="breadcrumb"><a href='{{ route("users.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To User</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                    <div class="form-group col-sm-6 mmtext">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6 mmtext">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6 mmtext">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                        @if ($errors->has('password'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6 mmtext">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                        @if ($errors->has('confirm-password'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('confirm-password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection