@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
			<form action="{{ route('album.store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<input type="file" name="image" class="form-control">
				<hr>
				<button type="submit" class="btn btn-primary">Upload</button>
			</form>
			<hr>

			@foreach($images as $image)
				<img src="{{ asset('storage/'.$image->name) }}" class="img-thumbnail" alt="">
			@endforeach

    </div>
</div>
@endsection
