@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Create Location
        </h1>
        <span class="breadcrumb"><a href='{{ route("location.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Location</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::open(['route' => 'location.store', 'files' => 'true']) !!}

                    <div class="form-group col-sm-6 mmtext">
                        {!! Form::label('name', 'Name:') !!} <span class="text-danger">*</span>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                       @endif
                    </div>

                    <div class="form-group col-sm-6 mmtext">
                        {!! Form::label('address', 'Address:') !!} <span class="text-danger">*</span>
                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('address'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                       @endif
                    </div>

                    <div class="form-group col-sm-6 mmtext">
                        {!! Form::label('latitude', 'Latitude:') !!} <span class="text-danger">*</span>
                        {!! Form::number('latitude', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('latitude'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('latitude') }}</strong>
                            </span>
                       @endif
                    </div>

                    <div class="form-group col-sm-6 mmtext">
                        {!! Form::label('longitude', 'Longitude:') !!} <span class="text-danger">*</span>
                        {!! Form::number('longitude', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('longitude'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('longitude') }}</strong>
                            </span>
                       @endif
                    </div>

                    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/css/fileinput.min.css" media="all"
                         rel="stylesheet" type="text/css"/>
                   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('category.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection