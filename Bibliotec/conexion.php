<?php
    function conexion(){
        $conexion = mysqli_connect('localhost','root','','facyt');
        return $conexion;
    
    }

?>