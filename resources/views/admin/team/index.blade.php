@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            Page
        </h1>
        <span class="breadcrumb"><a href='{{ route("team.create") }}' class="btn btn-sm btn-primary"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New Team Member</a></span>
    </section>
    <div class="content">
        <div class="row">
            <form method="GET">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::text('title', null, ['class' => 'form-control searchtitle']) !!}
                </div>
                <a href="{!! route('team.index') !!}" class="btn btn-info">Clear</a>
                <button type="submit" class="btn btn-primary btnSearch">Search</button>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @if($teams->isEmpty())
                    <div class="well text-center">No records were found.</div>
                @else
                    <table class="table table-striped table-hover tbl_repeat" id="sortable">
                        <thead>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Team Photo</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php $index = 1; ?>
                        @foreach($teams as $team)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td>{!! $team->title !!}</td>
                                <td>
                                    @if(!empty($team->media))
                                        <img src="{{ url($team->media->file_path.$team->media->file_name) }}" width="100px">
                                    @endif
                                </td>
                                <td>
                                <a href="{!! route('team.edit', [$team->id]) !!}"
                                   class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                                <a href="#" type="button" data-id="{{ $team->id }}"
                                   class="btn btn-xs btn-danger" data-toggle="modal"
                                   data-url="{{ url('admin/team/'.$team->id) }}"
                                   data-target="#deleteFormModal"><i
                                        class="fa fa-trash-o"></i>&nbsp;Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">
                        {{ $teams->appends($_GET)->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection