<?php


    class Controller{
        public $model;
        public $f3;
        public function __construct($f3)
        {
            $this->model = new Model();
            $this->f3 = $f3;
        }
        public function index()
        {   
            $this->f3->set("content","index.htm");
            echo Template::instance()->render('layout.htm');
        }

        public function getPageData()
        {   
            $json = $this->model->getJson();
            echo $json;
        }
        public function hook()
        {   
            $hook = $this->model->getHook();
            echo implode("|",$hook);
        }

        public function getGallery(){
            $gallery = $this->model->getGallery();
            echo json_encode($gallery);
        }
        public function fileupload(){
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);  
            if ((($_FILES["file"]["type"] == "image/gif")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/jpg")
            || ($_FILES["file"]["type"] == "image/pjpeg")
            || ($_FILES["file"]["type"] == "image/x-png")
            || ($_FILES["file"]["type"] == "image/png"))
            && ($_FILES["file"]["size"] < 10240000))
            {
                $filename = rand(100000,999999).time().".".$extension;
                if(move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/" .$filename)){
                    echo json_encode(array("status"=>1,"msg"=>$filename));
                }else{
                    echo json_encode(array("status"=>-1,"msg"=>"File upload failed"));
                }
            }else{
                echo json_encode(array("status"=>-1,"msg"=>"File format error or file size greater than 10MB"));
            }
        }
        public function addGallery(){
            $url = $this->f3->get('POST.url');
            $key = $this->f3->get('POST.key');
            $author = $this->f3->get('POST.author');
            $description = $this->f3->get('POST.description');
            if($key == "123"){
                $query = $this->model->addGallery($author,$description,$url);
                if($query){
                    echo json_encode(array("status"=>1));
                }else{
                    echo json_encode(array("status"=>-1));
                }
            }else{
                echo json_encode(array("status"=>-2));
            }
           
        }

        public function deleteGallery(){
            $key = $this->f3->get('POST.key');
            $id = $this->f3->get('POST.id');
            if($key == "321"){
                $query = $this->model->deleteGallery($id);
                if($query){
                    echo json_encode(array("status"=>1));
                }else{
                    echo json_encode(array("status"=>-1));
                }
            }else{
                echo json_encode(array("status"=>-2));
            }
        }
    }
?>