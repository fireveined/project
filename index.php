<?php


$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

$f3->config('config.ini');
$f3->set('siteName','Faucet');

$f3->route('GET /home',
    function($f3) {
    
        $f3->set('title','Home Page');
        echo \Template::instance()->render('index.html');
    }
);

$f3->route('GET /claim',
    function($f3) {
    
        $f3->set('title','Claim');
        echo \Template::instance()->render('home/template.html');
    }
);

$f3->route('GET /withdraw',
    function($f3) {
    
        $f3->set('title','Withdraw');
        echo \Template::instance()->render('template.html');
    }
);


$f3->route('GET /faq',
    function($f3) {
    
        $f3->set('title','FAQ');
        echo \Template::instance()->render('template.html');
    }
);



$f3->route('GET /lotery',
    function($f3) {
    
        $f3->set('title','Lotery');
        echo \Template::instance()->render('template.html');
    }
);
$f3->run();
