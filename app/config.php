<?php


defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "roo");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "sms_php_DB");

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


return $config = [
    'account_sid' => 'xxx',
    'auth_token' => 'xxx',
    'phone_number' => 'xxx',
    'code_number' => 'xxx'
];