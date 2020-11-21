<?php
	class ListController{
	    //xu ly trong controller dua du lieu ra man hinh voi print_r
		public function list(){
            require_once('models/listModel.php');
            $listmd = new listModel();
            $view = $listmd->listModel();

            require_once('views/listView.php');
            $listvw = new listView();
            $listvw->view($view);
		}

        public function add(){
            require_once('views/listView.php');
            $listvw = new listView();
            $listvw->addv();
        }

        public function added(){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];

            $post = array(
                'name'  => $name,
                'email' => $email,
                'sdt'   => $sdt,
            );

            require_once('models/listModel.php');
            $listmd = new listModel();
            $listmd->addModel($post);
        }
	}

 ?>