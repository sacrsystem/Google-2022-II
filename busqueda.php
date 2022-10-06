
<?php

require_once './vendor/autoload.php';
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision\V1\Likelihood;

$count=0;
$imageAnnotator = new ImageAnnotatorClient(
    [
        'credentials' => 'key.json'
    ]
);
$path = "https://img.freepik.com/vector-gratis/conjunto-muebles-hogar_74855-15461.jpg?w=2000";
 $image = file_get_contents($path);
 //$image= fopen($_FILES['image']['tmp_name'],'r');
 $response = $imageAnnotator->objectLocalization($image);
 $objects = $response->getLocalizedObjectAnnotations();

 foreach ($objects as $object) {

     $name = $object->getName(); 
     //$score = $object->getScore();
     $vertices = $object->getBoundingPoly()->getNormalizedVertices();
     echo $count++;
     printf($name);
    
    print(PHP_EOL);}?>