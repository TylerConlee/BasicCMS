<html>
	<head>
	</head>
	<body>
		{!!Form::open(array('url' => 'page'))!!}
			{!! Form::label('uri', 'URI') !!}
        	{!! Form::text('uri', Input::old('uri'), array('class' => 'form-control')) !!}

        	{!! Form::label('accesslevel', 'Access Level') !!}
        	{!! Form::text('accesslevel', Input::old('accesslevel'), array('class' => 'form-control')) !!}

			{!! Form::submit('Create')!!}

		{!! Form::close()!!}
	</body>

</html>