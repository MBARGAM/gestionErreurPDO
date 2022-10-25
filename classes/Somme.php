<?php 
   include_once("classes/Operations.php");
   class Somme extends Operations{

      public function operate(){
          return $this->getNombre1() + $this->getNombre2();
      }

   }

?>