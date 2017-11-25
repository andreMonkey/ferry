<?php

namespace app;

require '../vendor/autoload.php';
use PHPHtmlParser\Dom;

class HtmlParser
{
    public function parseUrl()
    {
        $dom = new Dom;
        $dom->loadFromUrl('http://google.com');
        $html = $dom->outerHtml;

        var_dump($html);

        // or
//        $dom->load('http://google.com');
//        $html = $dom->outerHtml; // same result as the first example
    }


}