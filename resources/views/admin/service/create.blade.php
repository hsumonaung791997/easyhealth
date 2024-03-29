@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            Create New Service
        </h1>
        <span class="breadcrumb"><a href='{{ route("service.index") }}' class="btn btn-sm btn-primary">
          <i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Service</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="">
                    {!! Form::open(['route' => 'service.store', 'files' => 'true']) !!}
                        <div class="row" >
                            <div class="form-group col-sm-6 mmtext">
                                {!! Form::label('title', 'Title:') !!} <span class="text-danger">*</span>
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('title'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                               @endif
                            </div>
                            <div class="form-group col-sm-6 mmtext">                       
                                {!! Form::label('parent', 'Parent:') !!}<br>                        
                                <select name="parent" id="parent_id" class="form-control">
                                    <option selected="selected">
                                    @foreach($parents as $parent)
                                        <option value="{{ $parent->id }}">
                                          {{ $parent->title }}
                                        </option>
                                    @endforeach
                                </option>
                                </select>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group col-sm-6 mmtext">                      
                                {!! Form::label('service_type', 'Service Type:') !!}<span class="text-danger">*</span><br>
                                <?php $array = json_decode(SERVICE_TYPE, TRUE); ?>
                                <select name="type" id="type" class="form-control">
                                    <option selected="selected"></option>
                                    @foreach ($array as $key => $a) 
                                        <option value="{{ $key }}">
                                          {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('type'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                           
                        <div class="row">
                            <div class="form-group col-sm-6 mmtext pull-right">
                                {!! Form::label('content_one', 'Content_One:') !!} <span class="text-danger">*</span>
                                <textarea id="content_one" class="editor" name="content_one" rows="10" cols="50"></textarea>
                                @if ($errors->has('content_one'))
                                   <span class="text-danger">
                                       <strong>{{ $errors->first('content_one') }}</strong>
                                   </span>
                                @endif
                            </div>

                            <div class="form-group col-sm-6 mmtext">
                                {!! Form::label('file', 'Upload Service Photo :') !!}
                                {{ Form::hidden('media_path', SERVICE_MEDIA_UPLOAD) }}
                                    <div class="file-loading">
                                        <input type="file" id="image_media" name="image_media" accept="image/*">
                                    </div>
                                <div class="kv-avatar-hint">
                                    <small>Select file < 1500 KB</small>
                                </div>
                                <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 mmtext pull-right">
                                {!! Form::label('content_two', 'Content_Two:') !!} <span class="text-danger">*</span>
                                <textarea id="content_two" class="editor" name="content_two" rows="10" cols="50"></textarea>
                                @if ($errors->has('content_two'))
                                   <span class="text-danger">
                                       <strong>{{ $errors->first('content_two') }}</strong>
                                   </span>
                                @endif
                            </div>

                            <div class="form-group col-sm-6 mmtext pull-right">
                                {!! Form::label('content_three', 'Need For Health Accessment:') !!} <span class="text-danger">*</span>
                                <textarea id="content_three" class="editor" name="content_three" rows="10" cols="50"></textarea>
                                @if ($errors->has('content_three'))
                                   <span class="text-danger">
                                       <strong>{{ $errors->first('content_three') }}</strong>
                                   </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 mmtext">
                                {!! Form::label('status', 'Status:') !!} <span class="text-danger">*</span><br>
                                <label class="radio radio-inline">{!! Form::radio('status', 1, true) !!} Active </label>
                                <label class="radio radio-inline">{!! Form::radio('status', 0) !!} Inactive </label>
                                @if ($errors->has('status'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/css/fileinput.min.css" media="all"
                             rel="stylesheet" type="text/css"/>
                       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>
                       <script>
                        var preview_image = "<?php echo url('images/default_preview.png') ?>";
                        $("#image_media").fileinput({
                            overwriteInitial: true,
                            maxFileSize: 1500,
                            showClose: false,
                            showCaption: true,
                            showUpload: false,
                            browseLabel: 'Browse Image',
                            removeLabel: 'Remove Image',
                            uploadUrl: "/file-upload-batch/2",
                            browseIcon: '<i class="fa fa-cloud-upload"></i>',
                            removeIcon: '<i class="fa fa-trash-o"></i>',
                            removeTitle: 'Cancel or reset changes',
                            elErrorContainer: '#kv-avatar-errors-1',
                            msgErrorClass: 'alert alert-block alert-danger',
                            defaultPreviewContent: '<img src="' + preview_image + '" alt="Your Avatar" class="img-rounded" style="width:250px">',
                            layoutTemplates: {main2: '{preview} ' + ' {remove} {browse}'},
                            allowedFileExtensions: ["jpg", "png", "gif", "jpeg"]
                        });
                        </script>
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('service.index') !!}" class="btn btn-default">Cancel</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection