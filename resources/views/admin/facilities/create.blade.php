@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            Create New Our Facility
        </h1>
        <span class="breadcrumb"><a href='{{ route("service.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Facility</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'facilities.store', 'files' => 'true']) !!}
                        <div class="form-group col-sm-6 mmtext">
                            {!! Form::label('file', 'Upload Facility Photo :') !!}
                            {{ Form::hidden('media_path', FACILITY_MEDIA_UPLOAD) }}
                                <div class="file-loading">
                                    <input type="file" id="image_media" name="image_media" accept="image/*">
                                </div>
                             <div class="kv-avatar-hint">
                                <small>Select file < 1500 KB</small>
                            </div>
                            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
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
                           <a href="{!! route('facilities.index') !!}" class="btn btn-default">Cancel</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection