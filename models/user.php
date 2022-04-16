<?php
class User{

    private $emri;
    private $mbiemri;
    private $mosha;
    private $emaili;
    private $passi;
    private $confpass;


    function __construct($emri,$mbiemri,$mosha,$emaili,$passi,$confpass){
        $this->emri=$emri;
        $this->mbiemri=$mbiemri;
        $this->mosha=$mosha;
        $this->emaili=$emaili;
        $this->passi=$passi;
        $this->confpass=$confpass;
    }

    function getEmri(){
        return $this->emri;
    }
    
    function getMbiemri(){
        return $this->mbiemri;
    }
    
    function getMosha(){
        return $this->mosha;
    }
    
    function getEmaili(){
        return $this->emaili;
    }
    
    function getPassi(){
        return $this->passi;
    }
    
    function getConfpass(){
        return $this->confpass;
    }

}

?>