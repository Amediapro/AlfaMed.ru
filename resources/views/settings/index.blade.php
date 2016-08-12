@extends('layouts.app') @section('content')
<form class="form-horizontal" role="form" method="post" action="">
	<div class="form-group">
		<label for="surname" class="col-sm-2 control-label">Фамилия</label>
		<div class="col-sm-10">
			<input required type="text" class="form-control" id="surname"
				name="surname" placeholder="Фамилия">
		</div>
	</div>
	<div class="form-group">
		<label for="first_name" class="col-sm-2 control-label">Имя</label>
		<div class="col-sm-10">
			<input required type="text" class="form-control" id="first_name"
				name="first_name" placeholder="Имя">
		</div>
	</div>
	<div class="form-group">
		<label for="second_name" class="col-sm-2 control-label">Отчество</label>
		<div class="col-sm-10">
			<input required type="text" class="form-control" id="second_name"
				name="second_name" placeholder="Отчество">
		</div>
	</div>
	<div class="form-group">
		<label for="birth_date" class="col-sm-2 control-label">Дата рождения</label>
		<div class="col-sm-10">
			<input required type="date" class="form-control" id="birth_date"
				name="birth_date" placeholder="Дата рождения">
		</div>
	</div>
	<div class="form-group">
		<label for="sex" class="col-sm-2 control-label">Пол</label>
		<div class="col-sm-10">
			<select required id="sex" name="sex" class="form-control">
				<option disabled>Выберите пол</option>
				<option value="м">М</option>
				<option value="ж">Ж</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-default person-data-submit-btn"
				name="person-data-submit-btn" placeholder="Сохранить">
		</div>
	</div>
</form>
@endsection
