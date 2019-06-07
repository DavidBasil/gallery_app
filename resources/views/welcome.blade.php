@extends('layouts.app')

@section('content')

<div class="container">
	@if(Session::has('message'))
		<div class="alert alert-success">
			{{ Session::get('message') }}
		</div>
	@endif
	<div class="row">
		@foreach($albums as $album)
		<div class="col-sm-4">
			<a href="{{ route('album.show', ['id' => $album->id]) }}">
				<img src="{{ asset('/images/football.jpg') }}" alt="" class="img-thumbnail">
				<a href="{{ route('album.show',  ['id'=>$album->id]) }}">{{ $album->name }}</a>
			</a>
		</div>
		@endforeach
	</div>
</div>

@endsection
