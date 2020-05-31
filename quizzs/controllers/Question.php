<?php
class Question extends Controller{

    public function __construct(){
        $this->folder_view="question";
        $this->layout="default";

    }
   
      public function listerQuestion(){
         $this->layout="layout_admin_int";
         $this->views="listeQuestion";
         $this->render();
        
      }
      public function creerQuestion(){
          $this->layout="layout_admin_int";
          $this->views="creerQuestion";
          $this->render();
    
      }
  
      public function passerQuestion(){
           echo 0; 
      }
  
     }

    
}



