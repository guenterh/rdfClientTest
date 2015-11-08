<?php


require "../vendor/autoload.php";

//$data = include("../data/turtle.ttl");

//$data = file_get_contents("../data/sw.p26_1.ttl");
//$data = file_get_contents("../data/sw.p26_1_1.json");
//$data = file_get_contents("../data/sw.p27.ttl");
$data = file_get_contents("../data/sw.p26.xml");



$graph = new EasyRdf_Graph();
EasyRdf_Namespace::set("ex", "http://example.org/");
$numbertriples = $graph->parse($data,'rdfxml');
//$numbertriples = $graph->parse($data,'jsonld');



//$graph->load();
$json = $graph->serialise("turtle");
echo $json;
