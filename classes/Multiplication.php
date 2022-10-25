<?php 
 include_once("classes/Operations.php");
   class Multiplication extends Operations{

      public function operate(){
          return $this->getNombre1() * $this->getNombre2();
      }

   }

?>