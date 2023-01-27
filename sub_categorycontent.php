<?php
include "header.php";
include "dbconn.php";
session_start();



$categories='';
$msg='';
$sub_categories='';

if(isset($_POST['submit'])){
	$sub_categories=$_POST['sub_categories'];
    $categoriesid=$_POST['categories_id'];

   
	$data = [

		"subcategories"=>$sub_categories
	];

	$result =  $database->getReference('/products/categories/'. $categoriesid)->push($data);
    
	if ($result) {
        $_SESSION['message'] = "Product Add Successfully";
        header("Location:index.php");
	}
}
	

?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Sub Categories</strong><small> Form</small></div>
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
							<div class="card-body card-block">
							   <div class="form-group">
									
                                   
                                   
                                    <?php
										 $ref = $database->getReference('products/categories');

                                         $moon = $database->getReference('products/categories/-NLUoqFZCBpu8nrro0Ci');

                                         $maruf = $database->getReference('products/categories/-NLUoqFZCBpu8nrro0Ci')->getSnapshot()->getValue();

                                         $mustar = $database->getReference('products/categories/-NLUoqFZCBpu8nrro0Ci')->getChildKeys();
           
                                         //$products = $ref->shallow()->getValue();
                                         //echo count($products = $moon->shallow()->getValue());
                                         

                                         foreach ($maruf as $key => $value) {
                                            ?>
										      
                                           
                                            <?php echo $value['subcategories']?>
                                           
                                        <?php } ?>
                                         
										
									
								</div>
                                
                                <div class="form-group">
									<label for="subcategories" class=" form-control-label">Sub Categories</label>
									<input type="text" name="sub_categories" placeholder="Enter sub categories" class="form-control" required value="<?php echo $sub_categories?>">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   
							  
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
