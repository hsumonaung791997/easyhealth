<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container"><br>
		<div class="pull-right">
			<a href="{{ route('post.index') }}" class="btn btn-success">Back</a>
		</div><br>
		<div class="row"> 
			{{ Form::open(['route' => 'post.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control"><br>
				<label>Content</label>
				<textarea name="content" class="form-control"></textarea>
                <div class="form-group">
                    <label><strong>Image</strong></label>
                    <br>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                	<label><strong>Status</strong></label>
	                <div class="radio">
	                    <label>
	                        <input type="radio" name="status" value="active" checked> Active<br>
						</label>
	                </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="inactive"> InActive<br>
                        </label>
                    </div>
                </div>
            </div>
				<input type="submit" class="btn btn-success" value="Save">
			</div>
			{{ Form::close() }}
		</div>
	</div>
</body>
</html>

<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form> -->