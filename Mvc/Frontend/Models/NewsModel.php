<?php 
class NewsModel
{
	public $table = 'tbl_news';

	public function getAll()
	{
		$conn = Connection::getInstance();

		$query = $conn->query("select * from tbl_news");
		$result = $query->fetchAll();
		return $result;
	}
}
