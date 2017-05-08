<?php 
// This file just has the array with the names of the images.
include('filenames.php');

// Set variables in a really roundabout way.
const LINK_ADDRESS = 'http://s3b.ezycat.images.s3-website-us-east-1.amazonaws.com/';
$filename = $filesource;
$i = $file;

// Loop through the array, download each item and save it as a jpg because Amazon S3 is stupid and saves each file without an extension.
foreach ($filename as $item) 
{ 
	set_time_limit(0); 
	$file = file_get_contents(LINK_ADDRESS . $item);
	file_put_contents($item . '.jpg', $file);
	// SAY IT!
	echo $item . 'jpg has been saved.';
}

?>