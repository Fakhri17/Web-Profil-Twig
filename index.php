<?php 
include "header.php";
include "data.php";
echo $twig->render('index.twig', $data);