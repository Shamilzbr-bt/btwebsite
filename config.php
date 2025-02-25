
<?php
// Enable OPcache
ini_set('opcache.enable', 1);
ini_set('opcache.memory_consumption', 128);
ini_set('opcache.interned_strings_buffer', 8);
ini_set('opcache.max_accelerated_files', 4000);

define("BASE_URL", "/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
define("PAGE", basename($_SERVER['PHP_SELF']));
?>


<?php
define("BASE_URL", "/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
define("PAGE", basename($_SERVER['PHP_SELF']));
?>
