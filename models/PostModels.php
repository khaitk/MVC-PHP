<?php 
	require_once('DbConnect.php');

	class PostModels extends DbConnect{		

		public function listPost(){
			$con = $this->connect();
			$result = $con->query("SELECT * FROM users");
			$posts = array();
			if($result->num_rows > 0){
				while ($post = mysqli_fetch_assoc($result)) {
				    $posts[] = $post;
				}
			}
			return $posts;
		}

		public function addPost($posts){
			$con = $this->connect();
			$result ="INSERT INTO users (`name`, `email`, `sdt`) VALUES (' ".$posts['name']."', '".$posts['email']."', '".$posts['sdt']." ') ";

			if(mysqli_query($con, $result)){
			    echo "Added successfully.";
			} else{
			    echo "ERROR: Could not able to execute $result. " . mysqli_error($con);
			}
		}

		

	}

?>