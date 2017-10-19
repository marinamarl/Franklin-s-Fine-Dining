<?php
$companyName = "Fanklin's Fine Dining";
include('arrays.php');
//include('/includes/arrays.php'); wont actually work.
?>

<!DOCTYPE html>
<html>

<head>
  <title><?php echo TITLE; ?></title>
  <link href="/assets/styles.css" rel="stylesheet">

</head>
<body id="final-example">
  <div class ="wrapper">
    <div id ="banner">
      <a href="/" title="Return to Home">
        <img src="img/banner.png" alt"Fraklin's Fine Dining">
      </a>

  </div><!--banner-->
  <div id="nav">

    <?php include('nav.php');?>


  </div> <!--nav-->
  <div class ="content">
