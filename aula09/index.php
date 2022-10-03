<?php
session_start();

$id = session_id();
echo $id;

$_SESSION['nome'] = "Gabriel";
$_SESSION['idade'] = 25;
$_SESSION['ativa'] = TRUE;