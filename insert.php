<?php
$m = new MongoClient();
$db = $m->birds;
echo "Connected to database birds. ";

$coll = $db->pets;
echo "Pets collection selected. ";

$doc = array(
			"name" => "duck",
			"color" => "brown"
);

$coll->insert($doc);
echo "Document inserted. "
?>