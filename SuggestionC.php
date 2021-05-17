<?php

class SuggestionC{
     
    private $connect;  //takes user obj also
    


  public function __construct($connect){

      $this->connect=$connect;

  }


  public function generateVideos($videos){  // it will generate videos
   
  

    if($videos == null){
        
        $gridVideos = $this->getItems();            //call to class function  

    }
    else {
      echo "entered else block";

        $gridVideos = $this->getItemsFromVideos($videos);
       

    }

                                         //returning the items in a grid form
    return "<div class='gridClass'>         
                 
               $gridVideos 
    
             </div>";


  }

  public function getItems(){              //getting the items by query

    $qry=$this->connect->query("SELECT * FROM videos ORDER BY RAND() LIMIT 10");   //query to display number of videos for suggestion
       
    $htmlElements = "";

    while($row = $qry->fetch_assoc()){                     //fetching the row
        
        $video = new VideoDetails($this->connect,$row);   //getting the passed video information
        $item = new VideoGridC($video);                    //passed into grid class
        $htmlElements.=$item->createGrid();                 //calling the public create function from gridclass
    }

    return $htmlElements;

  }

  public function getItemsFromVideos($videos){


  }

}




?>