<?php
class News{

    private $titulli;
    private $teksti;
    private $autori;
    private $dataL;
    private $oraL;



    function __construct($titulli,$teksti,$autori,$dataL,$oraL){
        $this->titulli=$titulli;
        $this->teksti=$teksti;
        $this->autori=$autori;
        $this->dataL=$dataL;
        $this->oraL=$oraL;
    
    }

    function getTitulli(){
        return $this->titulli;
    }
    
    function getTeksti(){
        return $this->teksti;
    }
    
    function getAutori(){
        return $this->autori;
    }
    
    function getDataL(){
        return $this->dataL;
    }
    
    function getOraL(){
        return $this->oraL;
    }
    

}

?>