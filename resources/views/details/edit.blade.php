@extends('details.layout')

@section('content')
<div class="container">
	<dic class="row">
	
	<div class="col-lg-12 margin-tb">
	<div class="pull-left">
	<h2 style="padding:20px">Edit Product</h2>

</div>
<div class="pull-right">

	<a class="btn btn-primary" href="{{ route('details.index') }}">Back</a>

	</div>
	</div>
	</div>

@if ($errors->any())
	<div class="alert alert-danger">
	<strong>Whoops!</strong>There were some problems with your input. <br><br>

	<ul>

	@foreach ($errors->all() as $error)

	<li>{{ $error }}</li>

	@endforeach
</ul>
</div>
@endif

<form action="{{ route('details.update',$detail->id) }}" method="POST">
@csrf

 @method('PUT')
	<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">

	<strong>Name:</strong>

	<input type="text" name="name" value="{{ $detail->name }}"

	class="form-control" placeholder="Name">

</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">

	<div class="form-group">
	<strong>Address</strong>

	<input type="text" name="age" value="{{ $detail->address }}"
class="form-control" placeholder="address">


</div>
</div>

<div class="col=xs=12 col-sm-12 col-md-12">
	
	<div class="form-group">
	<strong>Age</strong>
	<input type="text" name="fee" value="{{ $detail->age }}" class="form-control" placeholder="age">
</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12 text center">

	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

</form>
</div>
@endsection