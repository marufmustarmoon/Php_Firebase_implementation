<?php
include "header.php";
include "dbconn.php";
session_start();


session_start();
$categories='';
$msg='';

if(isset($_POST['submit'])){
	$categories=$_POST['categories'];
	$jikir = $_POST['jikir'];
	$data = [

		"categories"=>$categories
	];
	$datanew= [
		"jikir"=>$jikir,
		"categories"=>$categories
	];
	
	

	$result =  $database->getReference('/products/জিকির/' .$jikir)->push($data);
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
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
							<div class="card-body card-block">
							<div class="form-group">
									<label for="jikir" class=" form-control-label">Categories</label>
									<input type="text" name="jikir" placeholder="Enter jikir day" class="form-control" >
								</div>
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo $categories?>">
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
         
