<?php session_start(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: VerGil-PC
 * Date: 15/12/2017
 * Time: 18:02
 */
?>
<?php include "db.php" ?>
<?php include "../admin/functions.php" ?>



<?php

if (isset($_POST['login'])) {

    login_user($_POST['username'],$_POST['password']);



}


?>



