<?php 
	class PostViews{
		public function showView($post){
			/*print_r($post); hien thi database*/
			require_once('templates/showAll.php');
		}
		public function addPost(){
			require_once('templates/addPost.php');
		}
	}	
?>