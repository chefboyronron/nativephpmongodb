<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;


/*==================
    Single Result
====================*/
$document = $empcollection->findOne(
    [ '_id' => 1 ]
);
// var_dump( $document->name );
var_dump( $document );

echo '<hr>';

/*===================
    Muliti Results
    Params :
        Comparison
        Projection = include only to results 
            | 1=true | 0=false <= works only on _id
            remove the inclusion data if you want not to display
=====================*/
$documents = $empcollection->find(
    [ 'skill' => 'MongoDB' ],
    [ 'projection' => 
        [ '_id' => 0, 'name' => 1, 'skill' => 1 ] 
    ]
);

foreach($documents as $doc) {
    // var_dump($doc->name);
    var_dump($doc);
}

?>