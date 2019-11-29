@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blog
        </h1>
        
        <span class="breadcrumb"><a href='{{ route("blog.create") }}' class="btn btn-sm btn-primary"><i
                class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New Blog</a></span>
    </section>
    <div class="content">
        <div class="row">
            <form method="GET" class="form">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::text('title', null, ['class' => 'form-control searchtitle']) !!}
                </div>
                <a href="{!! route('blog.index') !!}" class="btn btn-info">Clear</a>
                <button type="submit" class="btn btn-primary btnSearch">Search</button>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>

        @include('flash::message')
        
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">

                <table class="table table-striped table-hover tbl_repeat tabledata" id="sortable">
                    <thead>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{!! $blog->content !!}</td>
                            <td>{!! showPrettyStatus($blog->status) !!}</td>
                            <td>
                            <a href="{!! route('blog.edit', [$blog->id]) !!}"
                               class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                            <a href="#" type="button" data-id="{{ $blog->id }}"
                               class="btn btn-xs btn-danger" data-toggle="modal"
                               data-url="{{ url('admin/blog/'.$blog->id) }}"
                               data-target="#deleteFormModal"><i
                                    class="fa fa-trash-o"></i>&nbsp;Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $blogs->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection