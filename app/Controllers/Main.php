<?php

namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('home');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}

	public function cards()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('cards');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}

	public function card_1()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('cards/card_1');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}

	public function card_2()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('cards/card_2');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}

	public function card_3()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('cards/card_3');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}

	public function card_4()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('cards/card_4');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}

	public function card_5()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('cards/card_5');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}

	public function card_6()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('cards/card_6');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}

	public function manual()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('manual');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}

	public function referencias()
	{
		echo view('templates/html_header');
		echo view('templates/header');
		echo view('referencias');
		echo view('templates/footer');
		echo view('templates/html_footer');
	}
}
