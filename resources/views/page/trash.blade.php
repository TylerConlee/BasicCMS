<html>
	<head>
	</head>
	<body>
		<a class="btn btn-small btn-success" href="{{ URL::to('admin') }}">Admin</a>
		<a class="btn btn-small btn-success" href="{{ URL::to('page/create') }}">Create Page</a>

		<table>
			@foreach($page as $key => $value)
		        <tr>
		            <td>{{ $value->id }}</td>
		            <td>{{ $value->title }}</td>
		            <td>{{ $value->author }}</td>
		            <td>{{ $value->accesslevel }}</td>
		            <td>{{ $value->created_at }}</td>
		            <td>

		                {!! Form::open(array('url' => 'page/' . $value->id . '/delete', 'class' => 'pull-right')) !!}
		                    {!! Form::submit('Permadelete this Page', array('class' => 'btn btn-warning')) !!}
		                {!! Form::close() !!}
		            </td>
		            <td>
		                <a class="btn btn-small btn-success" href="{{ URL::to($value->slug) }}">Show this Page</a>
		            </td>
		            <td>

		                <a class="btn btn-small btn-info" href="{{ URL::to('page/' . $value->id . '/restore') }}">Restore this Page</a>

		            </td>
		        </tr>
		    @endforeach
	    </table>
	</body>

</html>