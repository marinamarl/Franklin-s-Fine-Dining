<?php
// ini_set('display_errors', 'On');
// error_reporting(E_ALL | E_STRICT);
define("TITLE","Menu|Franklin's Fine Dining");
include('includes/header.php');
// Strip bad characters function
// Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
function strip_bad_chars( $input ) {
  $output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
  return $output;
}

if(isset($_GET['item'])) {
  $menuItem = strip_bad_chars( $_GET['item'] );
  $dish = $menuItems[$menuItem];
}
//https://www.tutorialspoint.com/php/php_get_post.htm για να δω τι κάνει το $_GET

/*money_format is a built in function in php that has various types of money formats
 function suggestedTip($price, $tip){
 $totalTip =$price*$tip;
 echo money_format('%.2n',$totalTip);
 } */

//calculate suggested tip for servers not run on windows
function suggestedTip($price, $tip){
        $totalTip = $price * $tip;
        echo $totalTip;
    }
?>
<hr>

<div id="dish">

  <h1><?php echo $dish["title"]; ?> <span class="price"><sup>$</sup><?php echo $dish["price"]; ?></span></h1>
  <p><?php echo $dish["blurb"]; ?></p>
  <br>
  <p><strong>Suggested beverage: <?php echo $dish["drink"]; ?></strong></p>
  <p><em>Suggested tip: <sup>$</sup><?php suggestedTip($dish["price"], 0.20); ?></em></p>
<!-- 0.20 is the percentage of the tip -->
</div><!-- dish -->

<hr>

<a href="menu.php" class="button previous">&laquo; Back to Menu</a>

<?php include('includes/footer.php'); ?>
