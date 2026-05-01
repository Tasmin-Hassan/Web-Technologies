<?php

class car {
    function  __construct(){
        $this ->model ="VW";
    }

}

// creat an object
$herbie = new car();

//show object properties
echo $herbie->model;
?>