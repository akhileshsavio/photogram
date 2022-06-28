<?php

//function to load content 

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/photogram/_templates/$name.php"; //not consistent.
}

function validate_credentials($email, $password){
    if($email == "bruce@waynecorp.com" and $password == "iambatman"){
        return true;
    }
    else{
        return false;
    }
}



?>