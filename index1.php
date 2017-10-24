<?php

require_once 'boneka.php';

$boneka1 = new boneka ('panda','hitam-putih');
$boneka2 = new boneka ('keropi','hijau');
$boneka1->set_bentuk('tedybear');
$boneka2->set_warna ('coklat');
echo "Bentuk Boneka :".$boneka1->get_bentuk() . '<br>';
echo "Warna Boneka :".$boneka2->get_warna() . '<br>';



?>