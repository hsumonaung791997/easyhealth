@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            Service
        </h1>
        <span class="breadcrumb"><a href='{{ route("service.create") }}' class="btn btn-sm btn-primary"><i
                class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New Service</a></span>
    </section>
    <div class="content">
        <div class="row">
            <form method="GET">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::text('title', null, ['class' => 'form-control searchtitle']) !!}
                </div>
                <a href="{!! route('service.index') !!}" class="btn btn-info">Clear</a>
                <button type="submit" class="btn btn-primary btnSearch">Search</button>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        @include('flash::message')  
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @if($services->isEmpty())
                    <div class="well text-center">No records were found.</div>
                @else
                    <table class="table table-striped table-hover tbl_repeat" id="sortable">
                        <thead>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Service Type</th>
                            <th>Service Photo</th>
                            <th>Status</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php $index = 1; ?>
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td>{{ $service->title }}</td>
                                <td>
                                    @if($service->type == 11)
                                        GP Service
                                    @elseif($service->type == 12)
                                        Health Assessments
                                    @else
                                        Other
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($service->media))
                                        <img src="{{ url($service->media->file_path.$service->media->file_name) }}" width="100px">
                                    @endif
                                </td>
                                <td>{!! showPrettyStatus($service->status) !!}</td>
                                <td>
                                <a href="{!! route('service.edit', [$service->id]) !!}"
                                   class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                                <a href="#" type="button" data-id="{{ $service->id }}"
                                   class="btn btn-xs btn-danger" data-toggle="modal"
                                   data-url="{{ url('admin/service/'.$service->id) }}"
                                   data-target="#deleteFormModal"><i
                                        class="fa fa-trash-o"></i>&nbsp;Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">
                        {{ $services->appends($_GET)->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection