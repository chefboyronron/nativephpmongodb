<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$collections = $empcollection->find();
foreach( $collections as $collection ) {
    var_dump($collection);
}
echo '<hr>';

/* ==========================
    UPDATE SINGLE DOCUMENT
============================= */

/* $updateResult = $empcollection->updateOne(
    [ 'age' => 28 ],
    [ '$set' => [ 'age' => 27 ] ]
);
if( $updateResult->getMatchedCount() > 0 ) {
    echo 'Document/s updated';
} else {
    echo 'Parameter 1 does not match any documents value.';
} */

/* ============================ */


/* ==========================
    UPDATE MANY DOCUMENTS
============================= */

/* $updateResult = $empcollection->updateMany(
    [ 'skill' => 'MongoDB' ],
    [ '$set' => [ 'manager' => 'Ron' ] ]
);
if( $updateResult->getMatchedCount() > 0 ) {
    echo 'Document/s updated';
} else {
    echo 'Parameter 1 does not match any documents value.';
} */

/* =========================== */

/* ==========================
    REPLACE ONE DOCUMENT
============================= */

$replaceResult = $empcollection->replaceOne(
    [ '_id' => 4 ],
    [ '_id' => 4, 'favColor' => 'Red' ]
);
if( $replaceResult->getMatchedCount() > 0 ) {
    echo 'Document/s updated';
} else {
    echo 'Parameter 1 does not match any documents value.';
}

echo '<hr>';
printf( 'Matched %d documents ', $replaceResult->getMatchedCount() );
printf( 'Modified %d documents ', $replaceResult->getModifiedCount() );
echo '<hr>';

/* =========================== */

/* echo '<hr>';
printf( 'Matched %d documents ', $updateResult->getMatchedCount() );
printf( 'Modified %d documents ', $updateResult->getModifiedCount() );
echo '<hr>'; */

$collections = $empcollection->find();
foreach( $collections as $collection ) {
    var_dump($collection);
}
?>