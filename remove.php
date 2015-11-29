<?php
$m = new MongoClient();
$db = $m->birds;
echo "Connected to database birds. ";

$coll = $db->pets;
echo "Pets collection selected. ";

$coll->remove(array("name" => "chick"));
echo " Document removed. "
?>