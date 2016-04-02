<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');
$f3->set('siteName','Faucet');

$f3->route('GET /',
    function($f3) {
    
        $f3->set('title','Home Page');
        echo \Template::instance()->render('template.html');
    }
);
$f3->run();
