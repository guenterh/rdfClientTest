<?php


require "../vendor/autoload.php";


//serialization constants:
//rdfxml, ntriples, jsonld, turtle

//$data = include("../data/turtle.ttl");

//$data = file_get_contents("../data/sw.p26_1.ttl");
//$data = file_get_contents("../data/sw.p26_1_1.json");
//$data = file_get_contents("../data/sw.p27.ttl");
$data = file_get_contents("../data/hpi2015/week2/rdfs/p11/rdfsExample.ttl");



$graph = new EasyRdf_Graph();
EasyRdf_Namespace::set("dbo", "http://dbpedia.org/ontology/");
EasyRdf_Namespace::set("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
EasyRdf_Namespace::set("rdfs", "http://www.w3.org/2000/01rdf-schema#");
EasyRdf_Namespace::set("ex", "http://example.org/Crimestories#");
EasyRdf_Namespace::set("dbpedia", "http://dbpedia.org/resource/");

$numbertriples = $graph->parse($data,'turtle');

//$numbertriples = $graph->parse($data,'jsonld');



//$graph->load();
$json = $graph->serialise("rdfxml");
echo $json;
