<?php
$m = new MongoClient();
$db = $m->birds;
echo "Connected to database birds. ";

$coll = $db->pets;
echo "Pets collection selected. ";

$cursor = $coll->find();

foreach ($cursor as $doc){
	echo ($doc["name"]);
}
echo " Documents found. "
?>