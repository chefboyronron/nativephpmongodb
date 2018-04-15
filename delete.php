<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$add = $empcollection->insertMany(
    array(
        array(
            '_id' => 1,
            'name' => 'Ron',
            'age' => 12,
            'skill' => 'AngularJS',
            'manager' => ''
        ),
        array(
            '_id' => 2,
            'name' => 'Kyle',
            'age' => 13,
            'skill' => 'MongoDB',
            'manager' => ''
        )
    )
);

/* =================== 
       DELETE ONE
======================*/
$delete = $empcollection->deleteOne(
    [ 'name' => 'Ron', 'age' => 27 ]
);
printf( 'Deleted %d documents', $delete->getDeletedCount() );

/* =================== 
       DELETE MANY
======================*/

$criteria = array(
    '$or' => array(
        array('_id' => 1),
        array('_id' => 2)
    )
);
$delete = $empcollection->deleteMany($criteria);
printf( 'Deleted %d documents', $delete->getDeletedCount() );

?>