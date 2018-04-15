<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$documentList = $empcollection->find(
    [],
    [
        'limit' => 4,
        'skip' => 1,
        'sort' => [ 'age' => -1 ]
    ]
);

echo '<pre>';
foreach( $documentList as $doc ) {
    print_r($doc);
}
echo '</pre>';

?>