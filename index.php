<?php
header ("Content-type:text/html;charset=utf-8");
// var_dump($_SERVER);
// echo $_SERVER["PATH_INFO"];
// $path=$_SERVER["PATH_INFO"];
// include $path.".html";
// include '/views/dashboard/index.html';


$path="";
if(array_key_exists("PATH_INFO",$_SERVER)){
    $path = $_SERVER["PATH_INFO"];
    $path = substr($path,1);
    $arr = explode('/',$path);
    if(count($arr)==2){
        $path = '/views/'.$path;
    }else if(count($arr)==1){
        $path = '/views/dashboard/'.$path;
    }
}else{
    $path = '/views/dashboard/index';
}

include $path.'.html';
?>