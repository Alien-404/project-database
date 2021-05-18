<?php
if(!session_id()) session_start(); 
require_once '../app/init.php';
date_default_timezone_set('Asia/Jakarta');
$app = new App;