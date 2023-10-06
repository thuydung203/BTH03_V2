<?php
require_once('../app/config/config.php');
require_once APP_ROOT.'app/services/Sachservive.php';

$sachservice = new Sachservive();
$sach = sachservice->getAllsach();

echo "<pre>";
print_r($sach);
echo "</pre>";
