<html>
	<head>
	</head>
	<body>
		<h1>{{$page->title}}</h1>
		<small>Created at {{$page->created_at}} by {{$page->author}}  </small>
		<p>{{$page->body}}</p>
		<a class="btn btn-small btn-success" href="{{ URL::to('admin') }}">Admin</a>
	</body>

</html>