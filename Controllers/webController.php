<?php
class webController{

    public function Index(){
        require 'Views/Web/Index.php';
    }

    public function Informatica(){
        require 'Views/Web/ServiciosInf.php';
    }

    public function Biomedica(){
        require 'Views/Web/Biomedica.php';
    }
}

?>