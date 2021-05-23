<?php
$ajax = false;
$need_auth = false;
$want_menu = true;
require_once("./common/init.php");

$pid = (isset($_GET["pid"])?intval($_GET["pid"]):1);

echo $twig->render('about.twig', array("pid"=>$pid));
?>
<style>
    /* Full width style */
    #cssmenu{
        width: 100%;
        margin-left: 0;
    }
    .table_default{
        margin-left: 20px;
    }
</style>
