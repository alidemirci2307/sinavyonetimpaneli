<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.9.2',
      'version' => '0.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dff976c2f3487d42c1db75a3b180e2b9f0e72ce0',
    ),
    'firebase/php-jwt' => 
    array (
      'pretty_version' => 'v5.2.0',
      'version' => '5.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'feb0e820b8436873675fd3aca04f3728eb2185cb',
    ),
    'google/analytics-admin' => 
    array (
      'replaced' => 
      array (
        0 => '0.1.0',
      ),
    ),
    'google/analytics-data' => 
    array (
      'replaced' => 
      array (
        0 => '0.1.0',
      ),
    ),
    'google/auth' => 
    array (
      'pretty_version' => 'v1.14.3',
      'version' => '1.14.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1503299c779af0cbc99b43788f75930988852cf',
    ),
    'google/cloud' => 
    array (
      'pretty_version' => 'v0.148.0',
      'version' => '0.148.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2631206490abd617c647f15d47954f6c12561ede',
    ),
    'google/cloud-asset' => 
    array (
      'replaced' => 
      array (
        0 => '1.3.0',
      ),
    ),
    'google/cloud-assured-workloads' => 
    array (
      'replaced' => 
      array (
        0 => '0.1.1',
      ),
    ),
    'google/cloud-automl' => 
    array (
      'replaced' => 
      array (
        0 => '1.3.2',
      ),
    ),
    'google/cloud-bigquery' => 
    array (
      'replaced' => 
      array (
        0 => '1.20.1',
      ),
    ),
    'google/cloud-bigquery-connection' => 
    array (
      'replaced' => 
      array (
        0 => '0.3.2',
      ),
    ),
    'google/cloud-bigquery-reservation' => 
    array (
      'replaced' => 
      array (
        0 => '0.2.2',
      ),
    ),
    'google/cloud-bigquery-storage' => 
    array (
      'replaced' => 
      array (
        0 => '1.0.2',
      ),
    ),
    'google/cloud-bigquerydatatransfer' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.2',
      ),
    ),
    'google/cloud-bigtable' => 
    array (
      'replaced' => 
      array (
        0 => '1.7.1',
      ),
    ),
    'google/cloud-billing' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.2',
      ),
    ),
    'google/cloud-common-protos' => 
    array (
      'replaced' => 
      array (
        0 => '0.2.1',
      ),
    ),
    'google/cloud-compute' => 
    array (
      'replaced' => 
      array (
        0 => '0.1.0',
      ),
    ),
    'google/cloud-container' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.1',
      ),
    ),
    'google/cloud-core' => 
    array (
      'replaced' => 
      array (
        0 => '1.41.0',
      ),
    ),
    'google/cloud-data-catalog' => 
    array (
      'replaced' => 
      array (
        0 => '1.0.2',
      ),
    ),
    'google/cloud-dataproc' => 
    array (
      'replaced' => 
      array (
        0 => '1.3.2',
      ),
    ),
    'google/cloud-datastore' => 
    array (
      'replaced' => 
      array (
        0 => '1.12.2',
      ),
    ),
    'google/cloud-datastore-admin' => 
    array (
      'replaced' => 
      array (
        0 => '0.1.1',
      ),
    ),
    'google/cloud-debugger' => 
    array (
      'replaced' => 
      array (
        0 => '1.3.3',
      ),
    ),
    'google/cloud-dialogflow' => 
    array (
      'replaced' => 
      array (
        0 => '0.17.4',
      ),
    ),
    'google/cloud-dlp' => 
    array (
      'replaced' => 
      array (
        0 => '1.1.1',
      ),
    ),
    'google/cloud-error-reporting' => 
    array (
      'replaced' => 
      array (
        0 => '0.18.2',
      ),
    ),
    'google/cloud-firestore' => 
    array (
      'replaced' => 
      array (
        0 => '1.19.0',
      ),
    ),
    'google/cloud-game-servers' => 
    array (
      'replaced' => 
      array (
        0 => '0.2.1',
      ),
    ),
    'google/cloud-iot' => 
    array (
      'replaced' => 
      array (
        0 => '1.3.2',
      ),
    ),
    'google/cloud-kms' => 
    array (
      'replaced' => 
      array (
        0 => '1.11.2',
      ),
    ),
    'google/cloud-language' => 
    array (
      'replaced' => 
      array (
        0 => '0.24.4',
      ),
    ),
    'google/cloud-logging' => 
    array (
      'replaced' => 
      array (
        0 => '1.21.0',
      ),
    ),
    'google/cloud-memcache' => 
    array (
      'replaced' => 
      array (
        0 => '0.3.2',
      ),
    ),
    'google/cloud-monitoring' => 
    array (
      'replaced' => 
      array (
        0 => '1.0.1',
      ),
    ),
    'google/cloud-osconfig' => 
    array (
      'replaced' => 
      array (
        0 => '0.1.1',
      ),
    ),
    'google/cloud-oslogin' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.2',
      ),
    ),
    'google/cloud-pubsub' => 
    array (
      'replaced' => 
      array (
        0 => '1.29.4',
      ),
    ),
    'google/cloud-recaptcha-enterprise' => 
    array (
      'replaced' => 
      array (
        0 => '1.0.2',
      ),
    ),
    'google/cloud-recommendations-ai' => 
    array (
      'replaced' => 
      array (
        0 => '0.2.3',
      ),
    ),
    'google/cloud-recommender' => 
    array (
      'replaced' => 
      array (
        0 => '1.3.0',
      ),
    ),
    'google/cloud-redis' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.2',
      ),
    ),
    'google/cloud-scheduler' => 
    array (
      'replaced' => 
      array (
        0 => '1.5.2',
      ),
    ),
    'google/cloud-secret-manager' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.1',
      ),
    ),
    'google/cloud-security-center' => 
    array (
      'replaced' => 
      array (
        0 => '1.1.0',
      ),
    ),
    'google/cloud-security-private-ca' => 
    array (
      'replaced' => 
      array (
        0 => '0.1.0',
      ),
    ),
    'google/cloud-service-directory' => 
    array (
      'replaced' => 
      array (
        0 => '0.3.2',
      ),
    ),
    'google/cloud-spanner' => 
    array (
      'replaced' => 
      array (
        0 => '1.32.3',
      ),
    ),
    'google/cloud-speech' => 
    array (
      'replaced' => 
      array (
        0 => '1.3.2',
      ),
    ),
    'google/cloud-storage' => 
    array (
      'replaced' => 
      array (
        0 => '1.23.1',
      ),
    ),
    'google/cloud-talent' => 
    array (
      'replaced' => 
      array (
        0 => '0.15.1',
      ),
    ),
    'google/cloud-tasks' => 
    array (
      'replaced' => 
      array (
        0 => '1.8.2',
      ),
    ),
    'google/cloud-text-to-speech' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.2',
      ),
    ),
    'google/cloud-trace' => 
    array (
      'replaced' => 
      array (
        0 => '1.3.2',
      ),
    ),
    'google/cloud-translate' => 
    array (
      'replaced' => 
      array (
        0 => '1.9.1',
      ),
    ),
    'google/cloud-videointelligence' => 
    array (
      'replaced' => 
      array (
        0 => '1.11.2',
      ),
    ),
    'google/cloud-vision' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.2',
      ),
    ),
    'google/cloud-web-risk' => 
    array (
      'replaced' => 
      array (
        0 => '1.0.2',
      ),
    ),
    'google/cloud-web-security-scanner' => 
    array (
      'replaced' => 
      array (
        0 => '0.6.3',
      ),
    ),
    'google/cloud-workflows' => 
    array (
      'replaced' => 
      array (
        0 => '0.1.0',
      ),
    ),
    'google/common-protos' => 
    array (
      'pretty_version' => '1.3',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '535f489ff1c3433c0ea64cd5aa0560f926949ac5',
    ),
    'google/crc32' => 
    array (
      'pretty_version' => 'v0.1.0',
      'version' => '0.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
    ),
    'google/gax' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a2d48062b0ac0433da463a1f7c77ab672bbbfa08',
    ),
    'google/grpc-gcp' => 
    array (
      'pretty_version' => '0.1.5',
      'version' => '0.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb9bdbf62f6ae4e73d5209d85b1d0a0b9855ff36',
    ),
    'google/protobuf' => 
    array (
      'pretty_version' => 'v3.14.0',
      'version' => '3.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '03f132a66f09f96064309e81c5fac8d35b7474e1',
    ),
    'grpc/grpc' => 
    array (
      'pretty_version' => '1.35.0',
      'version' => '1.35.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf75367acfcf154331f97d1525f9f46383b7891d',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.2.0',
      'version' => '7.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0aa74dfb41ae110835923ef10a9d803a22d50e79',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '60d379c243457e073cff02bc323a2a86cb355631',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '53330f47520498c0ae1f61f7e2c90f55690c06a3',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '28a5c4ab2f5111db6a60b2b4ec84057e0f43b9c1',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.1.1',
      'version' => '4.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd4032040a750077205918c86049aa0f43d22947',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '4.1.1',
      ),
    ),
    'rize/uri-template' => 
    array (
      'pretty_version' => '0.3.2',
      'version' => '0.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9e5fdd5c47147aa5adf7f760002ee591ed37b9ca',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.22.0',
      'version' => '1.22.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {

foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
