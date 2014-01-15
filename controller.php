<?php

require_once ('config.php');

$url = substr($_SERVER['REQUEST_URI'], strlen($APP_ROOT));

echo "</br>".$url;

$url=str_replace("pages/", "",$url);

echo "</br>".$url;

//echo $locs[$url];

//echo (isset($locs["index"]));
$frag = $locs[$url];

header('Location:'.$frag);

?>