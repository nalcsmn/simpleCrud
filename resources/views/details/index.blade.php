@extends('details.layout')

@section('content')
<div class="container">
<div class="pull-left">


	<h2 style="padding:20px">VAX PRE Registraition</h2>

</div>

<div class="row">

	<div class="col-lg-12 margin-tb">

		<div class="center">
			
			<a class="btn btn-success" style="margin:20px" href="{{ route('details.create') }}"> Register Now 💉</a>

		</div>
	</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>

</div>
@endif

<table class="table table-bordered">

	<tr>

		<th>No</th>
		<th>Name</th>
		<th>Address</th>
		<th>Age</th>
		<th width="280px">Action</th>
	</tr>

	@foreach ($details as $detail)
	<tr>

		<td>{{ ++$i }}</td>
		<td>{{ $detail->name }}</td>
		<td>{{ $detail->address }}</td>
		<td>{{ $detail->age }}</td>

		<td>
			<form action="{{ route('details.destroy',$detail->id) }}" method="POST">


				<a class="btn btn-primary" href="{{ route('details.edit',$detail->id) }}">Edit</a>

				@csrf
				@method('DELETE')

				<button type="submit" class="btn btn-danger">Delete</button>

			</form>

		</td>
	</tr>
	@endforeach

</table></div>