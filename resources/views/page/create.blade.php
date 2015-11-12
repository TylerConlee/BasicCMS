<html>
	<head>
	</head>
	<body>
		<a class="btn btn-small btn-success" href="{{ URL::to('admin') }}">Admin</a>
		{!!Form::open(array('url' => 'page'))!!}
			<div>
				{!! Form::label('title', 'Title') !!}
	        	{!! Form::text('title', Input::old('title'), array('class' => 'form-control')) !!}
        	</div>
        	<div>
				{!! Form::label('author', 'Author') !!}
	        	{!! Form::text('author', Input::old('author'), array('class' => 'form-control')) !!}
        	</div>
    		<div>
        		{!! Form::label('accesslevel', 'Access Level') !!}
        		{!! Form::text('accesslevel', Input::old('accesslevel'), array('class' => 'form-control')) !!}
        	</div>
        	<div>
        		{!! Form::label('body', 'Body') !!}
        		{!! Form::textarea('body', Input::old('body'), array('class' => 'form-control')) !!}
        	</div>

			{!! Form::submit('Create')!!}

		{!! Form::close()!!}
	</body>

</html>