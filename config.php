<?php

$CFG->dirroot = '/path/to/moodle';
$CFG->wwwroot = 'http://localhost/MegaPHPioneer/moodle';
$CFG->dataroot = '/path/to/moodledata';
$CFG->dbtype = 'mysqli';
$CFG->dbname = 'megaphpioneer_moodle';
$CFG->dbuser = 'root';
$CFG->dbpass = '';
$CFG->dbhost = 'localhost';
$CFG->lang = 'en';
$CFG->prefix = 'mdl_';
$CFG->timezone = '99';
$CFG->tempdir = '/path/to/moodle/temp';
$CFG->sessionsavepath = '/path/to/moodle/sessions';
$CFG->cachedir = '/path/to/moodle/cache';
$CFG->adminuser = 'admin';
$CFG->adminpass = 'admin_password';
$CFG->webserverurl = 'http://localhost';
$CFG->version = 2023110800;
$CFG->theme = 'boost';
$CFG->debug = 0;
$CFG->directorypermissions = 02777;

require_once(__DIR__ . '/lib/setup.php');

?>
