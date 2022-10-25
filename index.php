<?php 
 include_once("classes/Operations.php");
  include_once("classes/Division.php");
  include_once("classes/Somme.php");
  include_once("classes/Soustraction.php");
  include_once("classes/Multiplication.php");

  
  try {
     $sous = new Soustraction(2,4);
      $mult= new Multiplication(2,4);
      $add = new Somme(2,4);
      $div = new Division(2,0);
 
      echo  "Soustraction ".$sous->__toString()."<br/>";
      echo  "Multiplication ".$mult->__toString()."<br/>";
      echo  "Somme ".$add->__toString()."<br/>";
      echo  "Division ".$div->__toString()."<br/>";
      

    }catch (Exception  $exc){
        echo $exc->getMessage();
    }
  


?>