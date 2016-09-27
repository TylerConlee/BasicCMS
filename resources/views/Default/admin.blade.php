@extends('Default.master')
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
						<td>Updated</td>
						<td>Actions</td>
					</tr>
					@foreach($page as $key => $value)
				        <tr>
				            <td>{{ $value->id }}</td>
				            <td>{{ $value->title }}</td>
				            <td>{{ $value->author }}</td>
				            <td>{{ $value->accesslevel }}</td>
				            <td>{{ $value->updated_at }}</td>
				            <td>
				            	<ul class="inline-list">
				            		<li><a href="{{ URL::to($value->slug) }}" class="button tiny success"><i class="fi-page"></i> View</a></li>
							      	<li><a href="{{ URL::to('page/' . $value->id . '/edit') }}" class="button tiny info"><i class="fi-page-edit"></i> Edit</a></li>
					            	<li>	{!! Form::open(array('url' => 'page/' . $value->id, 'class' => 'pull-right')) !!}
					                    {!! Form::hidden('_method', 'DELETE') !!}
					                    {!! Form::button('<i class="fi-page-remove"></i> Delete', array('type' => 'submit', 'class' => 'button tiny alert')) !!}

					                {!! Form::close() !!}
					                </li>
							    </ul>


				            </td>
				        </tr>
				    @endforeach
			    </table>
		    </div>
	    </div>
@endsection
