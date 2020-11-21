<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>mô hình MVC</title>
	<style>
		.button {
		  background-color: #4CAF50;
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		}
		input[type=text] {
		  width: 50%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		}
	</style>
</head>
<body>
	<form action="" method="GET">
		<input type="submit" class="button" value="Show List" name="action">
		<input type="submit" class="button" value="Add List" name="action">
	</form>
	<?php 

		$action = isset($_GET['action']) ? $_GET['action'] : NULL;

		require_once('controllers/PostControllers.php');
		$post = new PostControllers();


		if($action == 'Show List'){
			$post->getPost();
		}
		
		if ($action == 'Add List') {
			$post->addPost();
		}

		if ($action == 'Added') {
			$post->addedPost();
		}

	 ?>
</body>
</html>