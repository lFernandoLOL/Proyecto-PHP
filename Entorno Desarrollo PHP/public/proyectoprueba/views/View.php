<?php

class View{
    public static function show ($viewName, $data=null){
        include_once ("header.php");
        include ("$viewName.php");
        include ("footer.php");
    }
}


?>