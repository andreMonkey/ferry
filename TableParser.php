<?php
require('vendor/simple_html_dom.php');

$table = array();

$html = file_get_html('http://flow935.com/playlist/flowhis.HTM');
foreach($html->find('map') as $row) {
    var_dump($row);
}


// idea: splice string "<area ***>"
?>