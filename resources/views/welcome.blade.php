@extends('layouts.app')

@section('content')

<div class="container">
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
