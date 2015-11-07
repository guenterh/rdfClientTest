<?php

require '../vendor/autoload.php';

$jsonld = '
{
"@context": "http://json-ld.org/contexts/person.jsonld",
"@id": "http://dbpedia.org/resource/John_Lennon",
"name": "John Lennon",
"born": "1940-10-09",
"spouse": "http://dbpedia.org/resource/Cynthia_Lennon",
"parent": "file:///etc/fstab"
}

';


$graph = new EasyRdf_Graph();
$graph->parse($jsonld, 'jsonld');
$turtle = $graph->serialise('turtle');
echo $turtle;

$hbz = "{
  \"@context\":\"http://api.lobid.org/context/lobid-organisations.json\",
  \"@id\":\"http://lobid.org/organisation/DE-605\",
  \"@type\":\"http://xmlns.com/foaf/0.1/Organization\",
  \"contactqr\":\"http://lobid.org/media/DE-605_contactqr.png\",
  \"fundertype\":{
    \"@id\":\"http://purl.org/lobid/fundertype#n02\",
    \"@type\":\"http://www.w3.org/2004/02/skos/core#Concept\",
    \"prefLabel\":{
      \"de\":\"Land\",
      \"en\":\"Federal State\"
    },
    \"isil\":\"DE-605\",
    \"stocksize\":{
      \"@id\":\"http://purl.org/lobid/stocksize#n11\",
      \"@type\":\"http://www.w3.org/2004/02/skos/core#Concept\",
      \"prefLabel\":{
        \"de\":\"Einrichtung ohne Bestand\",
        \"en\":\"Institution without a collection\"
      }
    },
    \"locatedIn\":\"http://sws.geonames.org/6553049\",
    \"sameAs\":\"http://ld.zdb-services.de/resource/organisations/DE-605\",
    \"location\":{
      \"@type\":\"http://www.w3.org/2003/01/geo/wgs84_pos#SpatialThing\",
      \"lat\":\"50.93410\",
      \"long\":\"6.93549\"
    },
    \"address\":{
      \"@type\":[
        \"http://www.w3.org/2006/vcard/ns#Work\",
        \"http://www.w3.org/2006/vcard/ns#Address\"
      ],
      \"countryName\":\"Germany\",
      \"locality\":\"Köln\",
      \"postalCode\":\"50674\",
      \"streetAddress\":\"Jülicher Str. 6\"
    },
    \"email\":\"mailto:info-hbz@hbz-nrw.de\",
    \"url\":\"http://www.hbz-nrw.de\",
    \"orgType\":\"http://purl.org/lobid/libtype#n96\",
    \"linkedTo\":\"http://lobid.org/organisation/DE-605\",
    \"isPrimaryTopicOf\":\"http://dispatch.opac.d-nb.de/DB=1.2/CMD?ACT=SRCHA&IKT=8529&TRM=DE-605\",
    \"name\":\"hbz - Hochschulbibliothekszentrum des Landes Nordrhein-Westfalen\"
  }
}";


$graph = new EasyRdf_Graph();
$graph->parse($hbz, 'jsonld');
$turtle = $graph->serialise('turtle');
echo $turtle;