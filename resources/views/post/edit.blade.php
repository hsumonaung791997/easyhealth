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
			<a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
		</div><br>
		<div class="row">
			{{ Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'patch']) }}
			<div class="form-group">
				<label>Title</label>
				{{ Form::text('title',null, ['class' => 'form-control']) }}
				<label>Content</label>
				{{ Form::text('content',null, ['class' => 'form-control']) }}
				<label>Photo</label>
				{{ Form::file('image', null, ['class' => 'form-control']) }}
				<label>Status</label>
				{{ Form::checkbox('status', null, ['class' => 'form-control']) }}<br>
				<input type="submit" class="btn btn-success" value="Save">
			</div>
			{{ Form::close() }}
		</div>
	</div>
</body>
</html>