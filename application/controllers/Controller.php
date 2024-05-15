<?php
require_once __DIR__."/../models/Model.php";
require_once __DIR__."/../models/DefaultModel.php";
class Controller {
    public function loadProcess() {
        $action = isset($_GET['a']) ? $_GET['a'] : 'index';
		
        switch ($action) {
            case 'index':
                $this->index();
                break;

			case 'getData':
				$this->getSqliteData();
				break;
			case 'getImg':
				$this->getImgs();
				break;
			
            default:
                http_response_code(404);
                echo "Not Found";
                break;
        }
    }

    public function index() {

		$common = new DefaultModel();
		

		// $model = new Model();
		// var_dump($model->getAll('textdata'));
		
		
		// $common -> createTextTable();
		// $common -> insertData();
		
		
        include __DIR__.'/../views/index.php';
    }


	
	
	public function getSqliteData(){
		$db = new Model();
		$data = [
			'textData' => $db->getAll('textdata'),
		];
		header('Content-Type: application/json');
		echo json_encode($data);
		exit;
	}
	
	
	//get 3d images
	public function getImgs(){
		$directory = 'assets/images/gallery_images';
		
		$allowed_extensions = array('jpg','jpeg','gif','png');
		
		$file_parts = array();

		$response = "";
	
		$dir_handle = opendir($directory);

		while ($file = readdir($dir_handle)) {
		
			if (substr($file, 0, 1) != '.') {
				
				$file_components = explode('.', $file);
				
				$extension = strtolower(array_pop($file_components));
				
				if (in_array($extension, $allowed_extensions))
				{
					
					$response .= '/'.$file.'~';
				}
			}
		}

		closedir($dir_handle);

		echo substr_replace($response,"",-1);
	}
	
	
}
?>
