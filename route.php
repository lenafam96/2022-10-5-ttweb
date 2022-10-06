<?php

$action = $_GET['action'] ?? 'home';
switch ($action) {
    case 'home':
        require_once 'home.php';
        break;
    case 'bai1':
        require_once 'bai1.php';
        break;
    case 'bai7':
        require_once 'bai7.php';
        break;
    case 'bai8':
        require_once 'bai8.php';
        break;
    case 'bai9':
        require_once 'bai9.php';
        break;
    case 'bai10':
        require_once 'bai10.php';
        break;
    case 'bai11':
        require_once 'bai11.php';
        break;
    case 'bai12':
        require_once 'bai12.php';
        break;
    case 'bai13':
        require_once 'bai13.php';
        break;
}
