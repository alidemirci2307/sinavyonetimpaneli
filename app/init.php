<?php
session_start();
require_once __DIR__ . '/composer/vendor/autoload.php';
putenv('GOOGLE_APPLICATION_CREDENTIALS='.__DIR__.'/composer/sinavyonetimpaneli.json');
function loadClasses($className){
    //echo $className;
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}
//spl_autoload_register('loadClasses');


// Imports the Cloud Storage client library.

use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Firestore\FirestoreClient;

function auth_cloud_implicit($projectId)
{
    $config = [
        'projectId' => $projectId,
        'keyFilePath' => __DIR__.'/composer/sinavyonetimpaneli.json'
    ];

    # If you don't specify credentials when constructing the client, the
    # client library will look for credentials in the environment.
    $storage = new StorageClient($config);

    # Make an authenticated API request (listing storage buckets)
    foreach ($storage->buckets() as $bucket) {
        printf('Bucket: %s' . PHP_EOL, $bucket->name());
    }
}

auth_cloud_implicit('sinavyonetimpaneli');



/**
 * Initialize Cloud Firestore with default project ID.
 * ```
 * initialize();
 * ```
 */
$db = null;
function initialize()
{
    global $db;
    // Create the Cloud Firestore client
    $db = new FirestoreClient();
    printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);

}

initialize();

$data = [
    'uygulamanin_adi' => '',
    'state' => 'CB',
    'country' => 'USA'
];
$db->collection('cities')->document('LA')->set($data);

$data = [
    'name' => 'Tokyo',
    'country' => 'Japan'
];
$addedDocRef = $db->collection('cities')->add($data);
printf('Added document with ID: %s' . PHP_EOL, $addedDocRef->id());



