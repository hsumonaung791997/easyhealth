@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doctor
        </h1>  
        <span class="breadcrumb"><a href='{{ route("doctor.create") }}' class="btn btn-sm btn-primary"><i
                class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New Doctor</a></span>
    </section>
    <div class="content">
        <div class="row">
            <form method="GET">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::text('name', null, ['class' => 'form-control searchtitle']) !!}
                </div>
                <a href="{!! route('doctor.index') !!}" class="btn btn-info">Clear</a>
                <button type="submit" class="btn btn-primary btnSearch">Search</button>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        @include('flash::message') 
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @if($doctors->isEmpty())
                    <div class="well text-center">No records were found.</div>
                @else
                    <table class="table table-striped table-hover tbl_repeat" id="sortable">
                        <thead>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Education</th>
                            <th>Position</th>
                            <th>Doctor Photo</th>
                            <th>Status</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php $index = 1; ?>
                        @foreach($doctors as $doctor)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->education }}</td>
                                <td>{{ $doctor->position }}</td>
                                <td>
                                    @if(!empty($doctor->media))
                                        <img src="{{ url($doctor->media->file_path.$doctor->media->file_name) }}" width="100px">
                                    @endif
                                </td>
                                <td>{!! showPrettyStatus($doctor->status) !!}</td>
                                <td>
                                <a href="{!! route('doctor.edit', [$doctor->id]) !!}"
                                   class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                                <a href="#" type="button" data-id="{{ $doctor->id }}"
                                   class="btn btn-xs btn-danger" data-toggle="modal"
                                   data-url="{{ url('admin/doctor/'.$doctor->id) }}"
                                   data-target="#deleteFormModal"><i
                                        class="fa fa-trash-o"></i>&nbsp;Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">
                        {{ $doctors->appends($_GET)->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection