<?php
include "header.php";
include "dbconn.php";
session_start();
    $barname = "";
    $arbi = "";
    $bangla = "";
    $uccaron ="";
    $tottho = "";


if(isset($_POST['submit'])){
	
	$barname = $_POST['barname'];
    $arbi = $_POST['arbi'];
    $bangla = $_POST['bangla'];
    $uccharon = $_POST['uccharon'];
    $tottho = $_POST['tottho'];


	
	$data= [
		"আরবী" =>$arbi,
        "বাংলা" =>$bangla,
        "উচ্চারন" =>$uccharon,
        "তথ্য" =>$tottho
	];
	
	

	$result =  $database->getReference('/products/জিকির/' .$barname)->push($data);
	if ($result) {
        $_SESSION['message'] = "Product Add Successfully";
        header("Location:index.php");
	}
}
	

?>
<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">

        <div class="card mt-5">
                        <div class="card-header"><strong>জিকির ও নামাজ</strong></div>
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
							<div class="card-body card-block">
							<div class="form-group">
									<label for="jikir" class=" form-control-label">বারের নাম</label>
									<input type="text" name="barname" placeholder="" class="form-control" required >
								</div>
							   <div class="form-group">
									<label for="categories" class=" form-control-label">আরবী</label>
									<input type="text" name="arbi" placeholder="" class="form-control" required >
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">বাংলা</label>
									<input type="text" name="bangla" placeholder="" class="form-control" required >
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">উচ্চারন</label>
									<input type="text" name="uccharon" placeholder="" class="form-control" required >
								</div>
                                <div class="form-group">
									<label for="categories" class=" form-control-label">তথ্য</label>
									<input type="text" name="tottho" placeholder="" class="form-control" required >
								</div>
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block mt-1">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							  
							</div>
						</form>
                     </div>
        </div>
        </div>

        <div class="col-3">
       
    </div>
  
</div>
