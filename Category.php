<?php

class Category{

private $connect,$firstname;

 public function __construct($connect){

     $this->connect=$connect;
   // $this->firstname=$firstname;

 }

 public function showCat(){

  $qry="SELECT * FROM categories ";
  $res=$this->connect->query($qry);  //exe a query here
   
  $html ="  <div class='wrapper'>
            <div class='categoriesc'>";

   
       while($row = $res->fetch_assoc()){         //fetching the data 
           $html.="<br>".$this->getCat($row)."<br>";   //$row["name"];           //calls get catrgory function with the records 
       }


  return $html ." </div> </div> ";  //returned block of names are concat with the html
 }

  private function getCat($sqldata){   //record sqldata is passed into this function 
     
    $catID = $sqldata["id"];                 //from the sql data it will get the id of a patricular category
    //$title = $sqldata["name"];   //it will return the title names of the record 
      
     $entities=Entityhub::getEntity($this->connect,$catID,5); //objects stored in the varible

      $entityblock=""; //printing those entities in  the page
      
      $previews = new Preview($this->connect); //preview object
      foreach($entities as $entity){   

        $entityblock .=$previews->createEntityPreview($entity);    //call to the preview creation function
        
     }
     
  return $entityblock;      //return the block of names to  showcat
 }

}

?>