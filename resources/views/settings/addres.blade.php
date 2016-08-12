@extends('layouts.app') @section('content')
<form class="form-horizontal" role="form" method="post"
	action="/settings/addres">
	<div class="form-group">
		<label for="country" class="col-sm-2 control-label">Страна</label>
		<div class="col-sm-10">
			<input type="text" name="country" id="country" class="form-control"
				value="{{ old('country') }}">
		</div>
	</div>
	{{ csrf_field() }}
	<button type="submit" class="btn btn-default">
		<i class="fa fa-plus"></i> Сохранить
	</button>
</form>
@endsection
