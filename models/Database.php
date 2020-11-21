<?php
	class Database{
		public function connect(){
			$con = mysqli_connect('localhost', 'root', '', 'mvc');
    		if (mysqli_connect_errno()) {
    		  echo "Failed";
    		  exit();
    		}
    		return $con;
    		}
	}

 ?>