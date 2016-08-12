@extends('layouts.app') @section('content')
<p class="text-center">{{ Auth::user()->first_name }} {{
	Auth::user()->middle_name }} {{ Auth::user()->last_name }}</p>
@endsection
