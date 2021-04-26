<?php

//header Section ----------------------------------------------
require_once("Category.php");
require_once("Entity.php");
require_once("Entityhub.php");


?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset='utf-8'>
    <title>BlackBoard Home</title>
    <!-- CSS only -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href="landstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="eventactions.js"> </script>
 </head>
   <body>
        <div id="container">
         
           <div id="headcontainer">
               
                  <button class="navAction" style="width: 40px; height: 40px;">
                  
                    <img src="Resourses/nav_menu.png" >
                  
                  </button>
                 

           <div class="Rounded_Rectangle_">
              <div class="ceter">
                  <a href="">Home</a>
                  <a href="">Projects</a>
                  <a href="">Practice</a>
                  <a href="">Upload</a>
                       <div class="searchbarc">
                                 <form action="search.php" method="GET">

                                  <input type="text" class="searchBar" name="term" placeholder="search  here...." style="flex: 1;">
                                  <button class="searchButton" style="width: 40px;;">

                                    <img src="Resourses/search_button.png" >
                                  </button>
                                  
                                  
                                

                                 </form>
                        </div>
                             
                </div>
                 

              </div> 
                <div class="profile"> 
                <a href="profile.html">
                <img src="Resourses/profile_ic.png" width="60px" >
               </a> 
              </div>
            </div>
          
              <div id="Navbar" style="display: none;">
             </div>      
              <div id="mainContainer" >
                 
                 <div id="mContent">

              