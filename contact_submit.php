<?php
$msg = 'name: '.$_REQUEST['name']."<br>email: ".$_REQUEST['email']."<br>Message: ".$_REQUEST['message'];
mail('info@nextgenweb.co.nz','contact us info',$msg);
echo "ok";
