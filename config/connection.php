<?php

class connection{

function __construct()
{
    define('host','localhost') ;
    define('username','root') ;
    define('password','') ;
    define('database','pharmacy') ;  

$connection = mysqli_connect(host,username,password,database);
if(!$connection){
    die("Database Connection Faield");
}

return $this->$connection;

}
}

?>