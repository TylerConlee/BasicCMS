@extends('page.public')
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
					</tr>
					@foreach($page as $key => $value)
				        <tr>
				            <td>{{ $value->id }}</td>
				            <td>{{ $value->title }}</td>
				            <td>{{ $value->author }}</td>
				            <td>{{ $value->accesslevel }}</td>
				            <td>{{ $value->updated_at }}</td>

				        </tr>
				    @endforeach
			    </table>
		    </div>
	    </div>
@endsection
