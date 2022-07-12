<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

// Load library yang penting (database, session, form_validation)
$autoload['libraries'] = array('database', 'session', 'form_validation');
$autoload['drivers'] = array();

// Load helper yang bakal sering digunakan 
$autoload['helper'] = array('url', 'file');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array();
