<?php 

   class Exception{

      public function diviser($a,$b){

        if($b == 0){
          throw new Exception (" 0 ne peut pas etre le diviseur");
        }
      }
   }

?>