<?php

// Assuming you installed from Composer:
require "vendor/autoload.php";
use PHPHtmlParser\Dom;


//$html = new HTML5(array(
//    "xmlNamespaces" => true
//));


$dom = new Dom;
$dom->loadFromUrl('http://www.bsh.de/aktdat/wvd/lf/StPauli_lf.htm');
$html = $dom->innerHtml;


$nodes = [].slice.call(div.childNodes);

// add <waypoint> elements and distribute nodes by headings
$div.innerHTML = "";
    nodes.forEach(function (node) {
    if (!div.lastChild || /^h[1-6]$/i.test(node.nodeName)) {
        div.appendChild( document.createElement("waypoint") );
    }
        div.lastChild.appendChild(node);
    });


