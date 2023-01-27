<?php
include "header.php";
include "dbconn.php";
session_start();
?>

<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

   </head>
   
   <body>


      <div class="container">

        <div class="row mt-4">
           
            <div class="col-4">
                <div class="card">
                    <div class="row">
                        <img src="dua.jpg" alt=""  height="200">

                    </div>
                    <div class="row mt-4 mb-4">
                        <button onclick="myFunction()" type="button" class="btn btn-primary">দোয়া</button>

                    </div>
                </div>

            </div>
            <div class="col-4">
            <div class="card">
                <div class="row">
                    <img src="quran.jpg" alt=""   height="200">

                </div>
                <div class="row mt-4 mb-4">
                    <button onclick="myFunction()" type="button" class="btn btn-primary">কোরাআনের সূরা</button>

                </div>
                </div>
               

            </div>
            <div class="col-4">
                <div class="card">
                    <div class="row">
                        <img src="dua.jpg" alt=""  height="200">

                    </div>
                    <div class="row mt-4 mb-4">
                        <button onclick="myFunction()" type="button" class="btn btn-primary">জিয়ারত</button>

                    </div>
                </div>

            </div>
           
        </div>
        <div class="row mt-4">
           
           <div class="col-4">
               <div class="card">
                   <div class="row">
                       <img src="dua.jpg" alt=""  height="200">

                   </div>
                   <div class="row mt-4 mb-4">
                       <button onclick="myFunctionjikironamaj()" type="button" class="btn btn-primary">জিকির ও নামাজ</button>

                   </div>
               </div>

           </div>
           <div class="col-4">
           <div class="card">
               <div class="row">
                   <img src="quran.jpg" alt=""   height="200">

               </div>
               <div class="row mt-4 mb-4">
                   <button onclick="myFunction()" type="button" class="btn btn-primary">আমল</button>

               </div>
               </div>
              

           </div>
           <div class="col-4">
               <div class="card">
                   <div class="row">
                       <img src="dua.jpg" alt=""  height="200">

                   </div>
                   <div class="row mt-4 mb-4">
                       <button onclick="myFunction()" type="button" class="btn btn-primary">জিয়ারত</button>

                   </div>
               </div>

           </div>
          
       </div>
       
       




      </div>

      <script>
         function myFunctionjikironamaj() {

            location.replace("jikirodoa.php")

            }
      </script>
     
      
     </body>
     </html>
      