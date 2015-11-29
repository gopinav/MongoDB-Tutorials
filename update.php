<?php
$m = new MongoClient();
$db = $m->birds;
echo "Connected to database birds. ";

$coll = $db->pets;
echo "Pets collection selected. ";

$coll->update(array("name" => "duck"), array('$set' => array("name" => "chick")));
echo " Document updated. "
?>