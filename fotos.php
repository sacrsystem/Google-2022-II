hola mundo
<?php
   
    
    $count=1;
    require_once './vendor/autoload.php';
    use Google\Cloud\Vision\V1\ImageAnnotatorClient;
    use Google\Cloud\Vision\V1\Feature\Type;
    use Google\Cloud\Vision\V1\Likelihood;
    
    
    /*$VisionClien = new VisionClient([
        'credentials' => json_decode(file_get_contents('app/Views/create.json'), true)
        
    ]);*/
    //$VisionClien = new VisionClient(key = AIzaSyCGVdCH9ipqf8h11vOU0SGNBxbgjeH_dpU);
    

     $imageAnnotatorClient = new ImageAnnotatorClient([
        'credentials' => 'key.json'
    ]);
    $path = 'data:image/jpeg;base64,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';
        /*$image = fopen($path, 'r');
        $foto = $imageAnnotatorClient->image($image, ['FACE_DETECTION', 'LABEL_DETECTION']);
        //$resultado = $imageAnnotatorClient->AnnotateImage(fopen($path,'r'),[Type::'FACE_DETECTION']);
        
        $client = new ImageAnnotatorClient(
            [
                'credentials' => 'app/Views/key.json'
            ]
        );*/
        // Annotate an image, detecting faces. 
        /*$annotation = $imageAnnotatorClient->annotateImage( fopen($path, 'r'), [Type::LABEL_DETECTION] );
        $response = $imageAnnotatorClient->labelDetection($imageContent);
        // Determine if the detected faces have headwear. 
        foreach ($annotation->getLabelAnnotations() as $faceAnnotation) { 	
            $likelihood = Likelihood::name($faceAnnotation->getName()); 
            echo "Likelihood of headwear: $likelihood" . PHP_EOL; }*/

        $imglabel = file_get_contents($path);
        $response =$imageAnnotatorClient->labelDetection($imglabel);
        $labels = $response->getLabelAnnotations();
        if($labels){
            echo('Label :'.PHP_EOL);
            foreach($labels as $label){
                print($label->getDescription().PHP_EOL);
                

            }
        }else{
            print('no label found'.PHP_EOL);
        }
        $imageAnnotator = new ImageAnnotatorClient(
            [
                'credentials' => 'key.json'
            ]
        );
        ?>
       <?php
    
        
    # annotate the image
 
   
    $image = file_get_contents($path);
    //$image= fopen($_FILES['image']['tmp_name'],'r');
    $response = $imageAnnotator->objectLocalization($image);
    $objects = $response->getLocalizedObjectAnnotations();

    foreach ($objects as $object) {

        $name = $object->getName(); ?><br><br><hr> <?php
        $score = $object->getScore();
        $vertices = $object->getBoundingPoly()->getNormalizedVertices();
        echo $count++;
        printf('%s (confidence %f)):' . PHP_EOL, $name, $score);
        print('normalized bounding polygon vertices: ');
        foreach ($vertices as $vertex) {
            printf(' (%f, %f)', $vertex->getX(), $vertex->getY());
        }
        print(PHP_EOL);} ?>
         <?php
        /*$response =$imageAnnotatorClient->objectLocalization($imglabel);
        $labels = $response->getLocalizedObjectAnnotations();
        if($labels){
            echo('Label :'.PHP_EOL);
            foreach($labels as $label){
                print($label->get().PHP_EOL);
                

            }
        }else{
            print('no label found'.PHP_EOL);
        }*/
       /* $annotation = $imageAnnotatorClient->annotateImage( fopen($path, 'r'), [Type::LABEL_DETECTION] );
        foreach ($annotation->getLabelAnnotations() as $faceAnnotation) { 	
            $likelihood = Likelihood::name($faceAnnotation->getName()); 
            echo "Likelihood of headwear: $likelihood" . PHP_EOL; }*/
/*
    try {
        $img_path="https://graffica.info/wp-content/uploads/2020/10/nuevo-logo-de-gmail-1200x675.jpg";
        $imaContent = file_get_contents($img_path);
        $respuesta = $imageAnnotatorClient->textDetection($imaContent);
        $text = $respuesta->getTextAnnotations();
        echo  $text[0]->getDescription();
        $imageAnnotatorClient->close();
    
    } catch(Exception $e) {
        echo $e->getMessage();
        
    }
    */
    
    /*try {

        $imageAnnotatorClient = new ImageAnnotatorClient([
            'credentials' => 'app/Views/key.json'
        ]);
        
        
        $path = 'https://tse1.mm.bing.net/th?id=OIP.QoklOYgkvZO5Umyv-siXrgHaE8&pid=Api&P=0';
        $image = file_get_contents($path);
        $response = $imageAnnotatorClient->landmarkDetection($image);
        $landmarks = $response->getLandmarkAnnotations();
        printf('%d landmark found:' . "<br>", count($landmarks));
        foreach ($landmarks as $landmark) {
        print($landmark->getDescription() . "<br>");
        
        }
        
        
        
        $imageAnnotatorClient->close();
        
        } catch(Exception $e) {
        
        echo $e->getMessage();
        
        }*/

        

        

?>