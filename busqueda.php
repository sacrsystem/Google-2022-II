
<?php
$img=$_GET['imagenes'];
require_once './vendor/autoload.php';
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision\V1\Likelihood;


$imageAnnotator = new ImageAnnotatorClient(
    [
        'credentials' => 'key.json'
    ]
);
$path = "https://venta-muebles-tp.uc.r.appspot.com/imagen/$img";
 $image = file_get_contents($path);
 //$image= fopen($_FILES['image']['tmp_name'],'r');
 $response = $imageAnnotator->objectLocalization($image);
 $objects = $response->getLocalizedObjectAnnotations();

 foreach ($objects as $object) {

     $name = $object->getName(); 
     //$score = $object->getScore();
     $vertices = $object->getBoundingPoly()->getNormalizedVertices();
     
     printf($name);
    
    print(PHP_EOL);}?>