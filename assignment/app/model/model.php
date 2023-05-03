<?php
// Class that provides methods for working with the form data.
// There should be NOTHING in this file except this class definition.

class Model{
	private $db;

	public function __construct()
    {
		$dsn = "sqlite:./app/data/sqlite.db";
		try {
			$this->dbhandle = new PDO($dsn,'user','password',array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,
			));
		}
		catch(PDOException $e){
			echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
			print new Exception($e ->getMessage());
		}
		
	}

	public function getJson(){
		$json = file_get_contents("./app/data/data.json");
		return $json;
	}

	public function getHook(){
		$gallery = ["costa_3d.jpg","oasis_3d.jpg","smartwater_3d.jpg"];
		return $gallery;
	}

	public function getGallery(){
		try{
			$sql = "select * from gallery order by id desc";
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i = 0;
			while($data=$stmt->fetch()){
				$result[$i]['url'] = $data['url'];
				$result[$i]['author'] = $data['author'];
				$result [$i]['description'] = $data['description'];
				$result [$i]['id'] = $data['id'];
				$i++;
			}
			return $result;
		}
		catch(PDOException $e){
			print new Exception($e->getMessage());
		}
	}

	public function addGallery($author,$description,$url){
		
		try{
			$sql = "insert into gallery(`author`,`description`,`url`) values ('$author','$description','$url')";
			$stmt = $this->dbhandle->exec($sql);
			return $stmt;
		}
		catch(PDOException $e){
			print new Exception($e->getMessage());
		}
	}
	public function deleteGallery($galleryId){
		
		try{
			$sql = "delete from gallery where id = $galleryId";
			$stmt = $this->dbhandle->exec($sql);
			return $stmt;
		}
		catch(PDOException $e){
			print new Exception($e->getMessage());
		}
	}
}
