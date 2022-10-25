<?php 

   class Division extends Operations{

      public function operate(){
        if($this->getNombre2() == 0){
            throw new Exception (" 0 ne peut pas etre le diviseur");
        }
        return $this->getNombre1()/ $this->getNombre2();
      }

      

   }

?>