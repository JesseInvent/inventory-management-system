<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		helper(['app', 'form', 'factory']);
	}
	public function index()
	{
		$products = getProducts();
		return view('home', ["products" => $products]);
	}

	public function login() {
		return view('login');
	}
	public function signup() {
		return view('signup');
	}
}
