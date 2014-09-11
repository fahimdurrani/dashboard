<?php

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));

Route::get('/user/{username}', array(
		'as'	=> 'profile-user',
		'uses'	=> 'ProfileController@user'

	));


/*
 Authenticated group
*/
Route::group(array('before' => 'auth'), function(){


	Route::group(array('before' => 'csrf'), function(){

		//change password (GET)

		Route::post('/account/change-password', array(
				'as' 	=> 'account-change-password-post',
				'uses'	=> 'AccountController@postChangePassword'
			));



	});

	//change password (GET)

	Route::get('/account/change-password', array(
			'as' 	=> 'account-change-password',
			'uses'	=> 'AccountController@getChangePassword'
		));

	//Sign Out (GET)

	Route::get('/account/sign-out', array(
			'as' 	=> 'account-sign-out',
			'uses'	=> 'AccountController@getSignOut'
		));
});

/*
 Unauthenticated group
*/
Route::group(array('before' => 'guest'), function(){

	// cross site forgery protection
	// CSRF protection group
	Route::group(array('before' => 'csrf'), function(){

		Route::post('/account/create', array(

			'as' => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));

			//Sign in (POST)
		Route::post('/account/sign-in', array(

			'as' 	=> 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));

	//Forgot password (POST)
		Route::post('/account/forgot-password', array(
			'as' 	=> 'account-forgot-password-post',
			'uses'	=> 'AccountController@postForgotPassword'
		));


	});

	//Forgot password (GET)
	Route::get('/account/forgot-password', array(
		'as' 	=> 'account-forgot-password',
		'uses'	=> 'AccountController@getForgotPassword'
	));


	//Account Recover
	Route::get('/account/recover/{code}', array(
		'as' 	=> 'account-recover',
		'uses'	=> 'AccountController@getRecover'
	));


	//Sign in (GET)
	Route::get('/account/sign-in', array(
		'as' 	=> 'account-sign-in',
		'uses' => 'AccountController@getSignIn'
	));

	//Create Account (GET)
	Route::get('/account/create', array(

		'as' 	=> 'account-create',
		'uses' => 'AccountController@getCreate'
	));

	//Activate Account (GET)
	Route::get('/account/activate/{code}', array(

		'as' => 'account-activate',
		'uses' => 'AccountController@getActivate'
	));

});
