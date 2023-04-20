<?php
include_once "views/nav.php";

include_once "classes/Page_Data.class.php";
$pageData=new Page_data();

$pageData->setTitle("Dynamic Image Gallery");
$pageData->setContent($nav);
$pageData->setCSS("<link href='css/layout.css' rel='stylesheet'/>");
$pageData->appendCSS("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'>");
$clickedNav=isset($_GET['page']);
if($clickedNav){
    $fileLoad=$_GET['page'];
}
else{
    $fileLoad="gallery";
}
include_once "views/$fileLoad.php";
$pageData->appendContent($info);
$pageData->setScript("<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>") ;

require "templates/page.php";
echo $page;

