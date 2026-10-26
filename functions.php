<?php
function getComposant(string $composantName, array $params=[]):void{
    $path = __DIR__ . "/components/";
    if(file_exists($path.$composantName)){
        require $path.$composantName;
    };
};
?>