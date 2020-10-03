<?php namespace APP\controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
	public function index() {
		return view('welcome_message');
	}

	public function view($page = 'test') {
		return view($page);
	}
}

?>