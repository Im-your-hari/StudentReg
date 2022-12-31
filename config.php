<?php

define('host','localhost'); //Ivide localhost maatti database servernte IP kodkanm...
define('username','root'); //Ivide root maatti database username...
define('password',''); //Ivide password maatti database password...
define('database','admission'); // admission database name aanu...

$con = mysqli_connect(host,username,password,database);

if($con == false){
    die("Error connecting ".mysqli_connect_error());
}


?>