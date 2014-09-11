@extends('layout.main')

@section('content')

<form action="{{URL::route('account-change-password')}}" method="post">
		

		<div class="form-group">
			Old Password: <input type="password" name="old_password">
			@if($errors->has('old_password'))
				{{$errors->first('old_password')}}
			@endif
		</div>


		<div class="form-group">
			New Password: <input type="password" name="password">
			@if($errors->has('password'))
				{{$errors->first('password')}}
			@endif
		</div>

		<div class="form-group">
			Confirm New Password: <input type="password" name="password_again">
			@if($errors->has('password_again'))
				{{$errors->first('password_again')}}
			@endif
		</div>

		{{Form::token()}}
		<input type="submit" value="Change Password">
	</form>

@stop