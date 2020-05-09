<?php
	if(isset($_POST['id'])):
		$id = $_POST['id'];
		$books = array(
			array(
				"id"=>"1",
				"title" => "Professional JavaScript",
				"author" => "Author 1"
			),
			array(
				"id"=>"2",
				"title" => "The Definitive Guide",
				"author" => "Author 2"
			),
			array(
				"id"=>"3",
				"title" => "High Performance of JavaScript",
				"author" => "Author 3"
			),
			array(
				"id"=>"4",
				"title" => "Ajax for null",
				"author" => "Author 4"
			)
		);

		foreach ($books as $book) : 
			if($book['id'] == $id):
				//echo print_r($book);
				echo json_encode($book);
			endif;
		endforeach;

	endif;
?>