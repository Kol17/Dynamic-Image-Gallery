<?php
//complete source code for views/upload.php
include_once "views/uploadform.php";

function upload()
{
include_once "classes/Upload.class.php";
$uploader = new Uploader("image-data");

$uploader->saveIn("imgs") ;
$fileUploaded = $uploader->save();

if ($fileUploaded) {
    $out = "New file uploaded to Images Gallery";
} else {
    $out = "Something went wrong";
}
return $out;

}
$info = upload() ;