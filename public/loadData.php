<?php


require "../vendor/autoload.php";

//$data = include("../data/turtle.ttl");

//$data = file_get_contents("../data/sw.p26_1.ttl");
//$data = file_get_contents("../data/sw.p26_1_1.json");
$data = file_get_contents("../data/sw.p27.ttl");

$graph = new EasyRdf_Graph();
$numbertriples = $graph->parse($data,'turtle');
//$numbertriples = $graph->parse($data,'jsonld');



//$graph->load();
$json = $graph->serialise("jsonld");
echo $json;
