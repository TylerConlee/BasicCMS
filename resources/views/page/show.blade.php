@extends('page.master')
@section('title', 'Create Page')
@section('content')
	<div class="row">
		<div class="large-12 columns">
		<h1>{{$page->title}}</h1>
		<small>Created at {{$page->created_at}} by {{$page->author}}  </small>
		<p>{{$page->body}}</p>
		<a class="btn btn-small btn-success" href="{{ URL::to('admin') }}">Admin</a>
@endsection