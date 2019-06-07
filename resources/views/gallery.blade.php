@extends('layouts.app')

@section('content')
<div class="container">
	<h2>{{ $album->name }} | {{ $album->images->count() }}</h2>
	<div class="row">
		@foreach($album->images as $image)
		<div class="col-sm-4">
			<img src="{{ asset('storage/'.$image->name) }}" alt="" class="img-thumbnail">
		</div>
		<form action="{{ route('image.delete') }}" method="post">
			@csrf
			<input type="hidden" name="id" value={{ $image->id }}>
			<button class="btn btn-danger" type="submit">Delete</button>
		</form>
		@endforeach
	</div>
</div>

@endsection
