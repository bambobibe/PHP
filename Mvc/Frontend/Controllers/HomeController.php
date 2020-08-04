<?php
include 'Mvc/Frontend/Models/NewsModel.php';

class HomeController extends Controller
{
	public function index()
	{
		$newmodel = new NewsModel();

		$news = $newmodel->getAll();
		return $this->renderHTML('Mvc/Frontend/Views/home.php', $news);
	}
} 