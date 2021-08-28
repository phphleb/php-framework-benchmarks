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
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.13.2',
      'version' => '1.13.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b668aef16090008790395c02c893b1ba13f7e08',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
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
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'symfony/cache' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '944db6004fc374fbe032d18e07cce51cc4e1e661',
    ),
    'symfony/cache-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c0446463729b89dd4fa62e9aeecc80287323615d',
    ),
    'symfony/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '4268f3059c904c61636275182707f81645517a37',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '51b71afd6d2dc8f5063199357b9880cea8d8bfe2',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a825e4b386066167a8b55487091cb62beec74c2',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627',
    ),
    'symfony/dotenv' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6d44663cff8c9880ee64d232870293a11e14cd6',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '281f6c4660bcf5844bb0346fe3a4664722fe4c73',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f2fd2208157553874560f3645d4594303058c4bd',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '69fee1ad2332a7cbab3aca13591953da9cdb7a11',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '343f4fe324383ca46792cae728a3b6e2f708fb32',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '17f50e06018baec41551a71a15731287dbaab186',
    ),
    'symfony/flex' => 
    array (
      'pretty_version' => 'v1.14.6',
      'version' => '1.14.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '2aae1ef7541d855962de3834d22186585d4f2049',
    ),
    'symfony/framework-bundle' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '2c5ed14a5992a2d04dfdb238a5f9589bab0a68d8',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8388f7b7054a7401997008ce9cd8c6b0ab7ac75',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '60030f209018356b3b553b9dbd84ad2071c1b7e0',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-iconv' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '16880ba9c5ebe3642d1995ab866db29270b36535',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9174a3d80210dca8daa7f31fec659150bbeabfc6',
    ),
    'symfony/polyfill-php72' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fba8933c384d6476ab14fb7b8526e5287ca7e010',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1100343ed1a92e3a38f9ae122fc0eb21602547be',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e66119f3de95efc359483f810c4c3e6436279436',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '0a35d2f57d73c46ab6d042ced783b81d09a624c4',
    ),
    'symfony/runtime' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '685a4a5491e25c7f2dd251d8fcca583b427ff290',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.3.3',
      'version' => '5.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '95c812666f3e91db75385749fe219c5e494c7f95',
    ),
    'symfony/twig-bridge' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '587c45ef49256279502b4a29146b9e87ad23426f',
    ),
    'symfony/twig-bundle' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '345965b40c1847ebdbb2ab0eb98c71a98a5e167b',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '3dd8ddd1e260e58ecc61bb78da3b6584b3bfcba0',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7898a65fc91e7c41de7a88c7db9aee9c0d432f0',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v5.3.6',
      'version' => '5.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '4500fe63dc9c6ffc32d3b1cb0448c329f9c814b7',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '21578f00e83d4a82ecfa3d50752b609f13de6790',
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
