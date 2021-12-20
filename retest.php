<?php
    error_reporting(E_ALL|E_STRICT);
    ini_set('display_errors',1);

    $res = mail("buchezpierric@gmail.com", "Subject", "Hello!");

    echo '<hr>Result was: ' . ( $res === FALSE ? 'FALSE' : 'TRUE') . $res;
    echo '<hr>';
    phpinfo();
?>
