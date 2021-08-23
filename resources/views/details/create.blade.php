@extends('details.layout')

@section('content')

<div class="row">

	<div class="col-lg-12 margin-tb">
		<div class="pull-left">

			<h2 style="padding:20px">Vax Pre Registration</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" style="margin:20px" href="{{ route('details.index') }}">Back</a>

		</div>
	</div>
</div>

@if ($errors->any())

<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
		@foreach ($errors->all() as $error)

		<li>{{ $error }}</li>
		@endforeach

	</ul>
</div>
@endif

<form action="{{ route('details.store') }}" method="POST">
	@csrf

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Name:</strong>
				<input type="text" name="name" class="form-control" placeholder="name">

			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Address</strong>

				<input type="text" name="address" class="form-control" placeholder="address">

			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">

			<div class="form-group">
				<strong>Age</strong>
				<input type="text" name="age" class="form-control" placeholder="age">

			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
@endsection