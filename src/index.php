<?php
    //phpinfo();
    //exit;
    require './vendor/autoload.php';


    $client = new MongoDB\Client("mongodb://admin:admin@mongodb:27017");
    $collection = $client->demo->beers;

    $result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

    echo "Inserted with Object ID '{$result->getInsertedId()}'\n";

    $client = Elastic\Elasticsearch\ClientBuilder::create()
    ->setHosts(['elasticsearch:9200'])
    ->build();
    $response = $client->info();

    echo "Elasticsearch version:" . $response['version']['number'] . "\n";
    echo "End";