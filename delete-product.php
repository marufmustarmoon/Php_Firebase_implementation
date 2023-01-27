<?php
include "dbconn.php";
session_start();

if (isset($_GET['barday'])) {
    $key = $_GET['key'];
    $barday = $_GET['barday'];
    // echo $key;
    //echo $barday;
    // echo ($barday."/".$key);
    // $moon= $barday."/".$key;

   // echo $barday;
    
    // echo $moon;
    $reff= $database->getReference('/products/জিকির/'.$barday.'/'.$key);
    $reff->remove();
           
    //$products = $ref->shallow()->getValue();
   
    

    // if($barday == 'শনিবার')
    // {
    //     $products = $database->getReference('products/জিকির/শনিবার/'.$key)->remove();
    //     echo $barday;
    // }
    // $products = $database->getReference('/products/জিকির/'.$barday);
    // $moon=$database->getReference('/products/জিকির/'.$barday)
    // // order the reference's children by the values in the field 'height'
    // ->orderByKey($key)
    // ->equalTo($key)
    // // limits the result to the last 10 children (in this case: the 10 tallest persons)
    
    // ->getSnapshot();
    // $valuee = $moon->getValue();
  
    // echo $valuee;

   
//    echo $pood = 'products/জিকির/'.$barday.'/'.$key;

//    $deletedata = $database->getReference($pood)->remove();

    // $products = $database->getReference('products/জিকির/'.$barday)->orderByChild($key)->equalTo($key)->getSnapshot();
    // $value = $products->getValue();
    // echo $value;


   // echo $barday;
  
    // echo $products;

   
  
    //  if ($products) {
    //   $_SESSION['message'] = "Product Delete Successfully";
    //    header('Location:/firebaset/indexxx.php');
    // }
}

?>
