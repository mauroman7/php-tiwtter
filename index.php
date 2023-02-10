<?php

$leyendo = file_get_contents("index.json");
$twits = json_decode($leyendo, true);
if(isset($_POST["tweet"])){
    $twits["tweets"][]=[
        "texto"=>$_POST["tweet"]],
        "autor"=> "Nerea",
        "username"=>"@nerea";
    $jsontuit = json_encode($twits);
    file_put_contents("index.json",$jsontuit);
}

require_once "index.html";

