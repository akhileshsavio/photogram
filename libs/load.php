<?php

//function to load content 

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/photogram/_templates/$name.php"; //not consistent.
}

?>