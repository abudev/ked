<?php
// Instantiate new DOMDocument object
$svg = new DOMDocument();
// Load SVG file from public folder
$svg->load(public_path('svg/map.svg'));
// Add CSS class (you can omit this line)
$svg->documentElement->setAttribute("class", "logo");
// Echo XML without version element
echo $svg->saveXML($svg->documentElement);
?>