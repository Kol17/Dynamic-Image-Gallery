<?php
//complete source code for views/gallery.php
function showImages(): string
{
    $out = "<h1>Image Gallery</h1>";
    $out .= "<ul id='images'><li>";
    
    // define variables
    $dir_name = "imgs" ;
    $totalSize = 0 ;
    $imgNo = 0 ;
    chdir( $dir_name) ;
    $imgArray = glob("*.jpg") ;

    foreach ($imgArray as $image){
        if( filesize($image)< 500000 and $totalSize < 2500000){
            $out .= '<img src="' . $dir_name . '/' . $image . '" />';
        }
        $out .="<button>View More</button>";
        $imgNo ++ ;
        $totalSize += filesize($image);
        if($imgNo % 4 == 0){
            $out .= "</li><li>";
        }
    }


    return $out;
}
//function call
$info = showImages();
