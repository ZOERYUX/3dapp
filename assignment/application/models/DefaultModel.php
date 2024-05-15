<?php
require_once 'Model.php';
class DefaultModel extends Model {
	
    public function __construct() {
        parent::__construct();
    }
	
	public function createTextTable(){
		$this->createTable('textdata',"id INTEGER PRIMARY KEY,type TEXT,title TEXT,subTitle TEXT,description TEXT,x3dModelTitle TEXT,x3dCreationMethod TEXT");
	}
	public function dropTextTable(){
		$this->dropTable('textdata');
	}



public function insertData(){
    $this->execute("INSERT INTO textdata (type, title, subTitle, description, x3dModelTitle, x3dCreationMethod) VALUES ('home', 'Coca Cola Great Britain', 'Founded in 1886 Dr John S Pemberton', 'The Coca Cola Company is the world''s leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.', '', '')");

    $this->execute("INSERT INTO textdata (type, title, subTitle, description, x3dModelTitle, x3dCreationMethod) VALUES ('brand', 'Coca Cola', 'New York Harbour, 1886', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!', '', '')");

    $this->execute("INSERT INTO textdata (type, title, subTitle, description, x3dModelTitle, x3dCreationMethod) VALUES ('brand', 'Sprite', 'West Germany, 1959', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.', '', '')");

    $this->execute("INSERT INTO textdata (type, title, subTitle, description, x3dModelTitle, x3dCreationMethod) VALUES ('brand', 'Dr Pepper', 'Texas, 1885', 'Dr Pepper''s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it''s still the same, with that distinctive flavour you just can''t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.', '', '')");


    $this->execute("INSERT INTO textdata (type, title, subTitle, description, x3dModelTitle, x3dCreationMethod) VALUES ('models', 'History of Coca Cola', 'Atlanta Beginnings', 'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs'' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs'' Pharmacy put it on sale for five cents (about 3p) a glass.', 'Coca Cola X3D Model', 'This X3D model of the coke can has been created in blender, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.')");


    $this->execute("INSERT INTO textdata (type, title, subTitle, description, x3dModelTitle, x3dCreationMethod) VALUES ('models', 'Sprite — Fanta Klare Zitrone', 'First introduced in 1961', 'Crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Cola''s no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.', 'Sprite X3D Model', 'This X3D model of the sprite bottle has been created in blender, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.')");


    $this->execute("INSERT INTO textdata (type, title, subTitle, description, x3dModelTitle, x3dCreationMethod) VALUES ('models', 'Dr Pepper — Liquid Sunshine', '23 fruit flavours', 'Dr Pepper''s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it''s still the same, with that distinctive flavour you just can''t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.', 'Dr Pepper X3D Model', 'This X3D model of the pepper cup has been created in blender, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.')");


    $this->execute("INSERT INTO textdata (type, title, subTitle, description, x3dModelTitle, x3dCreationMethod) VALUES ('gallery', '3D Images', '', 'These 3D images of the Coke can, Sprite bottle and Dr Pepper cup are rendered in 3ds Max 2017 with Mental Ray', '', '')");

    $this->execute("INSERT INTO textdata (type, title, subTitle, description, x3dModelTitle, x3dCreationMethod) VALUES ('camera', 'Camera Views', 'These buttons select a range of X3D model viewpoints', '', '', '')");
}


	
}