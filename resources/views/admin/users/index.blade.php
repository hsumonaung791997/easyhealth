@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Users
        </h1>
        <span class="breadcrumb"><a href='{{ route("users.create") }}' class="btn btn-sm btn-primary"><i
                class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New User</a></span>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">

                @include('admin.users.table')
                <div class="pull-right">{{ $data->render() }}</div>
            </div>
        </div>
    </div>
@endsection