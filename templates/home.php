<?php namespace ProcessWire;

// home.php (homepage) template file. 
// See README.txt for more information

/** @var Page $page API variable */

// Primary content is the page body copy and navigation to children. 
// See the _func.php file for the renderNav() function example
$content = $page->get('body') . renderNav($page->children); 

// if there are images, lets choose one to output in the sidebar
$images = $page->get('images'); /** @var Pageimages $images */

if($images && count($images)) {
	// if the page has images on it, grab one of them randomly... 
	$image = $images->getRandom();
	// resize it to 400 pixels wide
	$image = $image->width(400); 
	// output the image at the top of the sidebar...
	$sidebar = "<img src='$image->url' alt='$image->description' />";
	// ...and append sidebar text under the image
	$sidebar .= $page->get('sidebar');	
} else {
	// no images... 
	// append sidebar text if the page has it
	$sidebar = $page->get('sidebar'); 
}

