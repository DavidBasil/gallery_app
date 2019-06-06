@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="show">
			</div>
			<div id="errMsg">
			</div>
			<div class="card">
			<div class="card-body">
				<form action="{{ route('album.store') }}" method="post" id="form">
					@csrf
					<div class="form-group">
						<label>Name of album</label>
						<input type="text" name="album" class="form-control">
					</div>

					<div class="input-group control-group initial-add-more">
						<input type="file" name="image[]" class="form-control" id="image">
						<div class="input-group-btn">
							<button class="btn btn-success btn-add-more" type="button">Add</button>
						</div>
					</div>

					<br>

					<div class="copy" style="display:none">
						<div class="input-group control-group add-more">
							<input type="file" name="image[]" class="form-control" id="image">
							<div class="input-group-btn">
								<button class="btn btn-danger remove" type="button">Remove</button>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">Submit</button>
					</div>

				</form>

			</div>
			</div>
		</div>
	</div>
</div>
@endsection

