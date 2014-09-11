@extends('layout.main')


@section('content')
	<form action="{{URL::route('account-forgot-password')}}" method="post">
		

		<div class="form-group">
			Email: <input type="text" name="email"  {{(Input::old('email')) ? 'value="'.e(Input::old('email')).'"':''}}>
			@if($errors->has('email'))
				{{$errors->first('email')}}
			@endif
		</div>

		{{Form::token()}}
		<input type="submit" value="Recover">
	</form>

@stop