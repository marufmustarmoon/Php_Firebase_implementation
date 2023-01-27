<?php
include "header.php";
include "dbconn.php";
session_start();


?>


<div class="container">
   
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">জিকির ও নামাজ</th>
                <th scope="col">বারের নাম</th>
                <th scope="col">আরবি</th>
                <th scope="col">বাংলা</th>
                <th scope="col">উচ্চারন</th>
                <th scope="col">তথ্য</th>
               
               
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        <tr>

        <!-- <td scope="row">শনিবার</td> -->
            <?php


           
            $ref= $database->getReference('/products/জিকির/');
            $বার = $ref->getSnapshot()->getValue();
            
            foreach ($বার as $barday => $value) {
                ?>  
                   
                    

            <?php
            
            $reff= $database->getReference('/products/জিকির/' .$barday);
           
            //$products = $ref->shallow()->getValue();
           
            $bar= $reff->getSnapshot()->getValue();


            foreach ($bar as $key => $value) {
            ?>
                   <td scope="row">জিকির ও নামাজ</td>
                   <td scope="row"><?php echo $barday ?></td>
                    
                    <td scope="row"><?php echo $value['আরবী'] ?></td>
                    <td scope="row"><?php echo $value['বাংলা'] ?></td>
                    <td scope="row"><?php echo $value['উচ্চারন'] ?></td>
                    <td scope="row"><?php echo $value['তথ্য'] ?></td>
                 
                    
                   
                    <td>
                      
                       
                      
                        <a href="/firebaset/delete-product.php?key=<?php echo $key ?> & barday=<?php echo $barday ?> " class="btn btn-danger">Delete</a>
                    </td>
                   
       
                    <tr>
            <?php } ?>
            <?php } ?>
            



        </tbody>
    </table>
</div>


