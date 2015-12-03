@extends('page.master')
@section('title', 'Admin')
@section('content')
		<div class="row">
			<div class="large-12 columns">

		{!! Form::model($page, array('route' => array('page.update', $page->id), 'method' => 'PUT')) !!}
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
			{!! Form::submit('Edit')!!}

		{!! Form::close()!!}
@endsection