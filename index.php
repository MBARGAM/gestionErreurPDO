<?php 
  include_once("classes\Division.php");
  include_once("classes\Operations.php");
  include_once("classes\Somme.php");
  include_once("classes\Soustraction.php");
  include_once("classes\Somme.php");
  include_once("classes\Exception.php");
  
  try {
     $sous = new Soustraction(2,4);
      $mult= new Multiplication(2,4);
      $add = new Somme(2,4);
      $div = new Division(2,0);
 
       $sous->__toString();
       $mult->__toString();
       $add->__toString();
       $div->__toString();
      

    }catch (Exception  $exc){
        echo $exc->getMessage();
    }
  


?>