<?php
    require_once('Database.php');

    class listModel extends Database{

        public function listModel(){
            $con = $this->connect();

            $sql = $con->query('Select * from users');

            $post = array();

            if($sql->num_rows >0){
                while($posts = mysqli_fetch_assoc($sql)){
                    $post[] = $posts;
                }
            }
            return $post;
        }

        public function addModel($posts){
            $con = $this->connect();

            $sql = "INSERT INTO users (`name`, `email`, `sdt`) VALUES ('".$posts['name']."', '".$posts['email']."', '".$posts['sdt']."') ";

            if(mysqli_query($con, $sql)){
                echo "Added successfully.";
            } else{
                echo "ERROR: Could not able to execute $result. " . mysqli_error($con);
            }
        }
    }
?>