<?php
    require_once ('config.php');
    $url = $_GET["page"];
    $frag = $locs[$url];
    
    header('Location:'.$frag);
?>
