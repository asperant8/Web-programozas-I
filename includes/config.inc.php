<?php
$windowTitle = array(
    'title' => 'Lost Dog & Cat Rescue Foundation',
);

$header = array(
    'img' => 'headerimg.png',
    'imgalt' => 'Lost Dog & Cat Rescue Foundation',
	'motto' => 'Lost adj. 1. Unable to find the way. <br> 2. Not appreciated or understood. <br> 3.No longer owned or known.'
);

$footer = array(
    'copyright' => ''.date("Y").' Lost Dog & Cat Rescue Foundation (LDCRF) is a section 501(c)(3) tax-exempt public charity, FEIN: 31-1789600.',
    'made' => 'Designed and developed by Oliver Balog'
);

$pages = array(
	'/' => array('file' => 'home', 'content' => 'Home', 'menun' => array(1,1)),
	'about' => array('file' => 'about', 'content' => 'About', 'menun' => array(1,1)),
	'galery' => array('file' => 'galery', 'content' => 'Gallery', 'menun' => array(1,1)),
    'contactus' => array('file' => 'contactus', 'content' => 'Contact Us', 'menun' => array(1,1)),
    'table' => array('file' => 'table', 'content'=> 'Table', 'menun' => array(1,1)),
	'message' => array('file' => 'message', 'content' => '', 'menun' => array(0,0)),
    'account' => array('file' => 'account', 'content' => 'Account', 'menun' => array(1,0)),
    'logout' => array('file' => 'logout', 'content' => 'Log out', 'menun' => array(0,1)),
    'log_in_page' => array('file' => 'log_in_page', 'content' => '', 'menun' => array(0,0)),
    'registration' => array('file' => 'registration', 'content' => '', 'menun' => array(0,0)),
    'login' => array('file' => 'login', 'content' => '', 'menun' => array(0,0)),
    'registrate' => array('file' => 'registrate', 'content' => '', 'menun' => array(0,0)),
    'upload' => array('file' => 'upload', 'content'=> '', 'menun' => array(0,0)),
);

$gallery = array(
    'types' => array('.jpg','.png'),
    'dateformat' => "Y.m.d. H:i"
);
$directory = './gallery/';

$not_found = array ('file' => '404', 'content' => 'The page is not found!');
?>