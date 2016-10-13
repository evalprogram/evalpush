<?php

/**
 * Functions.php
 *
 * @author Eval Programs <evalprogram@gmail.com>
 * @license MIT
 * @package evalprogram/evalpush
 */

/**
 * openPre
 */
function openPre() {
    print (php_sapi_name() != 'cli') ? '<pre>' : '';
}

/**
 * closePre
 */
function closePre() {
    print (php_sapi_name() != 'cli') ? '</pre>' : '';
}

/**
 * openCode
 */
function openCode() {
    print (php_sapi_name() != 'cli') ? '<code>' : '';
}

/**
 * closeCode
 */
function closeCode() {
    print (php_sapi_name() != 'cli') ? '</code>' : '';
}

/**
 * 
 * @param array $array
 * @param boolean $halt
 * @return void
 */
function print_array(array $array, $halt = false) {
    openPre();
    print_r($array);
    closePre();
    if ($halt) {
        exit();
    }
}

/**
 * 
 * @param object $object
 * @param type $halt
 * @return void
 */
function print_object($object, $halt = false) {
    openPre();
    print_r($object);
    closePre();
    if ($halt) {
        exit();
    }
}
