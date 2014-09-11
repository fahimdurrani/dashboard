<?php

class HomeController extends BaseController {

	public function home(){

		/*Mail::send('emails.auth.test', array('name' => 'Alex'), function($message){
			$message->to('fahimjan56@gmail.com', 'Fahim Durrani')->subject('Test email');
		});
		*/

		/*$user = User::find(1)->username;
		echo '<pre>', print_r($user), '</pre>';*/
		return View::make('home');
	}
}
