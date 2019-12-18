@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            Profile
        </h1>
        <span class="breadcrumb"><a href='{{ route("company_profile.create") }}' class="btn btn-sm btn-primary"><i
                class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New Profile</a></span>
    </section>
    <div class="content">
        <div class="row">
            <form method="GET" class="form">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::text('title', null, ['class' => 'form-control searchtitle']) !!}
                </div>
                <a href="{!! route('company_profile.index') !!}" class="btn btn-info">Clear</a>
                <button type="submit" class="btn btn-primary btnSearch">Search</button>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @if($profiles->isEmpty())
                    <div class="well text-center">No records were found.</div>
                @else
                    <table class="table table-striped table-hover tbl_repeat tabledata" id="sortable">
                        <thead>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Profile Photo</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                            <?php $index = 1; ?>
                            @foreach($profiles as $profile)
                                <tr>
                                    <td>{{ $index++ }}</td>
                                    <td>{{ $profile->title }}</td>
                                    <td>
                                        @if(!empty($profile->media))
                                            <img src="{{ url($profile->media->file_path.$profile->media->file_name) }}" width="100px">
                                        @endif
                                    </td>
                                    <td>
                                    <a href="{!! route('company_profile.edit', [$profile->id]) !!}"
                                       class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                                    <a href="#" type="button" data-id="{{ $profile->id }}"
                                       class="btn btn-xs btn-danger" data-toggle="modal"
                                       data-url="{{ url('admin/company_profile/'.$profile->id) }}"
                                       data-target="#deleteFormModal"><i
                                            class="fa fa-trash-o"></i>&nbsp;Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">
                        {{ $profiles->appends($_GET)->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection