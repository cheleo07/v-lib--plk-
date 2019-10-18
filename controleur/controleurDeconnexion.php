<?php

$_SESSION['codeacces'] = null;
$_SESSION['codesecret'] = null;
$_SESSION['vlib']=[];
$_SESSION['vlib']="accueil";
header('location: index.php');

require_once 'vue/vueDeconnexion.php' ;