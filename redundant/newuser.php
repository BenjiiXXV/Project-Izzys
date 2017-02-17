<?php 

include('db.php');
$db = new DB();

var_dump($db->storeUser('BetaBitch', 'BetaKey6669'));
$db->storeUser('BetaBitch', 'BetaKey6669');