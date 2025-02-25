

// Error handling
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/error.log');

function customErrorHandler($errno, $errstr, $errfile, $errline) {
    error_log("Error [$errno]: $errstr in $errfile on line $errline");
    if($errno == E_USER_ERROR) {
        header("Location: " . BASE_URL . "error.php");
        exit(1);
    }
    return true;
}
set_error_handler("customErrorHandler");

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
