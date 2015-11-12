@extends('page.master')
@section('title', 'Admin')
@section('content')
		<div class="row">
			<div class="large-12 columns">

				<table>
					<tr>
						<td>Page ID</td>
						<td>Title</td>
						<td>Author</td>
						<td>Access Level</td>
						<td>Created</td>
						<td>Delete</td>
						<td>View</td>
						<td>Edit</td>
					</tr>
					@foreach($page as $key => $value)
				        <tr>
				            <td>{{ $value->id }}</td>
				            <td>{{ $value->title }}</td>
				            <td>{{ $value->author }}</td>
				            <td>{{ $value->accesslevel }}</td>
				            <td>{{ $value->created_at }}</td>
				            <td>

				                {!! Form::open(array('url' => 'page/' . $value->id, 'class' => 'pull-right')) !!}
				                    {!! Form::hidden('_method', 'DELETE') !!}
				                    {!! Form::submit('Delete this Page', array('class' => 'btn btn-warning')) !!}
				                {!! Form::close() !!}
				            </td>
				            <td>
				                <a class="btn btn-small btn-success" href="{{ URL::to($value->slug) }}">Show this Page</a>
				            </td>
				            <td>

				                <a class="btn btn-small btn-info" href="{{ URL::to('page/' . $value->id . '/edit') }}">Edit this Page</a>

				            </td>
				        </tr>
				    @endforeach
			    </table>
		    </div>
	    </div>
@endsection
