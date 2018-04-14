<?php
require 'vendor/autoload.php';

// $client = new MongoDB\Client("mongodb://localhost:27010");
$client = new MongoDB\Client;

/* ==========================
    CREATE AND USE DATABASE
=============================*/
// $companydb = $client->companydb;


/* =====================
    DROP DATABASE
======================== */
/* $delete_database = $client->dropDatabase('companydb');
var_dump( $delete_database ); */


/* =====================
    LIST ALL DATABASES
======================== */
/* foreach( $client->listDatabases() as $database ) {
    var_dump( $database );
} */


/* =====================
    DELETE COLLECTION
======================== */
/* $delete_collection = $companydb->dropCollection('mycollection');
var_dump( $delete_collection ); */


/* ==============================
    RETRIEVE COLLECTION LIST
================================= */
/* foreach( $companydb->listCollections() as $collection ) {
    echo '<pre>';
    print_r( $collection );
    echo '</pre>';
} */


/* ====================
    CREATE COLLECTION
======================= */
/* try {
    $result1 = $companydb->createCollection( 'mycollection' );
    var_dump($result1);
}catch( Exception $e ) {
    var_dump( $e->getMessage() );
} */


/* Visual Studio Code Shortcut Snippets */
//https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf

?>