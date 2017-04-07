<?php

$db = new PDO('mysql:host=localhost;port=3306;dbname=projet', 'dev', 'azertyuiop');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$req = $db->query('SELECT * FROM weather ORDER BY date DESC LIMIT 1');
$req = $req->fetch();
print json_encode($req);
