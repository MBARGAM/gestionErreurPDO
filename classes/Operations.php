<?php 

   abstract class Operations{
       private $nombre1 ;
       private $nombre2 ;
       
       public function __construct($nbre1,$nbre2){
           $this->nombre1 = $nbre1 ;
           $this->nombre2 = $nbre2 ;

       }
       
       public function setNombre1($nbre){
        $this->nombre1 = $nbre ;
       }
       public function setNombre2($nbre){
        $this->nombre2 = $nbre ;
       }

        public function getNombre1(){
            return $this->nombre1 ;
        }
        public function getNombre2(){
            return $this->nombre2 ;
        }


       abstract public function operate();

       public function __toString(){
           return   "le resultat est de ".$this->operate() ;
       }

   }

?>