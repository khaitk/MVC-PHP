<?php 
	class PostControllers{
		
		public function getPost(){

			require_once('models/PostModels.php');
			$post = new PostModels();
			$posts = $post->listPost();

			require_once('views/PostViews.php');
			$postView = new PostViews();
			$postView->showView($posts);

		}

		public function addPost(){

			require_once('views/PostViews.php');
			$postView = new PostViews();
			$postView->addPost();

		}

		public function addedPost(){

			$name = $_POST['name'];
			$email = $_POST['email'];
			$sdt = $_POST['sdt'];

			$posts = array(
				'name'	=> $name,
				'email'	=> $email,
				'sdt'	=> $sdt,
			);

			require_once('models/PostModels.php');
			$post = new PostModels();
			$posts = $post->addPost($posts);
		}


	}
?>