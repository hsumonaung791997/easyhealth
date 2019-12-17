@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Service
        </h1>
        <span class="breadcrumb"><a href='{{ route("service.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Service</a></span>
    </section>
   <div class="content">
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($service, ['route' => ['service.update', $service->id], 'method' => 'patch', 'files' => 'true']) !!}

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
                            {!! Form::label('parent', 'Parent:') !!}<span class="text-danger">*</span><br>
                            <?php
                                $ids = [];
                                foreach($all_services as $all_service) {
                                    $ids[] = $all_service->id;
                                }
                            ?>
                            <select name="parent" id="parent_id" class="form-control">
                                @if($service->parent != null)
                                    @if(in_array($service->parent, $ids))
                                        @foreach ($all_services as $all_service)
                                            @if ($all_service->id == $service->parent) 
                                                <option value="{{ $all_service->id }}" selected="selected">
                                                    {{ $all_service->title }}
                                                </option>                                                
                                            @endif
                                        @endforeach
                                    @endif
                                @else
                                    <option value="" selected="selected">                         
                                    </option>
                                @endif                              

                                @foreach($parents as $parent)
                                    @if($service->parent != $parent->id)
                                        <option value="{{ $parent->id }}">
                                            {{ $parent->title }}
                                        </option> 
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('parent'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('parent') }}</strong>
                                </span>
                            @endif
                        </div>                                        
                        
                        <div class="form-group col-sm-6">
                            {!! Form::label('type', 'Service Type:') !!} <span class="text-danger">*</span>
                             <?php $array = json_decode(SERVICE_TYPE, TRUE); ?>
                            <select name="type" id="type" class="form-control">
                                @foreach ($array as $key => $a) 
                                <option value="{{ $key }}" @if( $key == $service->type ) selected @endif>
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

                        <div class="form-group col-sm-6 mmtext pull-right">
                            {!! Form::label('description', 'Description:') !!} <span class="text-danger">*</span>
                            {!! Form::textarea('description', null, ['class' => 'editor']) !!}

                            @if ($errors->has('description'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-sm-6 mmtext">
                            {!! Form::label('file', 'Upload Product Photo :') !!} <span class="text-danger">*</span>
                            {{ Form::hidden('media_path', SERVICE_MEDIA_UPLOAD) }}
                                <div class="file-loading">
                                    <input type="file" id="media_upload" name="image_media" accept="image/*">
                                </div>
                            <div class="kv-avatar-hint">
                                <small>Select file < 1500 KB</small>
                            </div>

                            <div id="kv-avatar-errors-1" class="center-block" style="display:none"></div>
                            @if ($errors->has('image_media'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image_media') }}</strong>
                                </span>
                            @endif                           
                        </div>                                              

                        <div class="form-group col-sm-6 mmtext">
                            {!! Form::label('status', 'Status:') !!} <span class="text-danger">*</span><br>
                            Active &nbsp; &nbsp; {{ Form::radio('status', STATUS_ACTIVE) }} <br>
                            Inactive &nbsp; &nbsp; {{ Form::radio('status', STATUS_INACTIVE) }}
                            @if ($errors->has('status'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('service.index') !!}" class="btn btn-default">Cancel</a>
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/css/fileinput.min.css" media="all"
         rel="stylesheet" type="text/css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>
   <script>
        $(function () {
            var preview_image = "<?php echo url('images/default_preview.png') ?>";
            var initPreview = "<?php echo null != $service->media ? url($service->media->file_path . $service->media->file_name) : url('images/default_preview.png') ?>";
            var initPreviewAlt = "<?php echo null != $service->media ? $service->media->file_caption : '' ?>";
            var dataId = "<?php echo null != $service->media ? $service->media->id : '' ?>";
            var dataUrl = "<?php echo null != $service->media ? url('admin/media/' . $service->media->id) : '' ?>";
            $("#media_upload").fileinput({
                overwriteInitial: true,
                maxFileSize: 1500,
                showRemove: false,
                showClose: false,
                showCaption: true,
                showUpload: false,
                browseLabel: 'Browse Logo',
                removeLabel: 'Remove Logo',
                browseIcon: '<i class="fa fa-cloud-upload"></i>',
                removeIcon: '<i class="fa fa-trash-o">',
                removeTitle: 'Cancel or reset changes',
                elErrorContainer: '#kv-avatar-errors-1',
                msgErrorClass: 'alert alert-block alert-danger',
                // for image files
                initialPreview: [
                    @if(isset($service->media))
                        '<img src="' + initPreview + '" class="file-preview-image" alt="' + initPreviewAlt + '" title="' + initPreviewAlt + '" style="width:200px;height:200px">'
                    @endif
                ],
                defaultPreviewContent: '<img src="' + preview_image + '" alt="Your Avatar" class="img-rounded" style="width:250px"><input type="hidden" name="img" value= "1">',
                layoutTemplates: {main2: '{preview} ' + ' {remove} {browse}'},
                allowedFileExtensions: ["jpg", "png", "gif", "jpeg"]
            });


            $('.kv-file-remove').attr('data-target', '#deleteMediaModal');
            $('.kv-file-remove').attr('data-id', dataId);
            $('.kv-file-remove').attr('data-url', dataUrl);
            $('.kv-file-remove').attr('data-toggle', 'modal');
        })
   </script>
@endsection