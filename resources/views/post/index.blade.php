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
	<div class="container">
		<div class="row">
			<div class="page-heading">
				<h3>Category Index Page</h3>
			</div>
			<div class="pull-right">
				<a href="{{ route('post.create') }}" class="btn btn-primary">Create</a>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Content</th>
						<th>Photo</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<td>{{ $post->title }}</td>
							<td>{{ $post->content }}</td>
							<td>{{ $post->photo }}</td>
							<td>{{ $post->status }}</td>
							<td>
								<a href="{{ route('post.edit', $post->id )}}" class="btn btn-sm btn-primary">Edit</a>
								<form action="{{ route('post.destroy', $post->id) }}" method="post">
									@csrf
									{{ method_field('DELETE') }}
									<input type="submit" value="Delete" class="btn btn-sm btn-danger">
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>