<?php 
    error_reporting(E_ALL^ E_WARNING); 
    function connect($query){
        $db = mysqli_connect('localhost','root','1234','sunrin'); //설정해야함
        // $query= "select * from question where idx="."$idx;";
        $result = mysqli_query($db, $query);
        return $result;
    }
    
?>