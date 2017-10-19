<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
define ("TITLE","Menu | Franklin's Fine Dining");
include ('includes/header.php');
?>

<div id="menu-items">
  <h1> Our Delicious Menu </h1>
  <p> Like our team, our menu is very small &mdash; but dang, does it ever pack a punch!</p>
  <p><em>Click any menu item to learn more about it.</em></p>

  <hr>

  <ul>
    <!--
      syntax: foreach ($array as $key => $value)
      http://www.tuxradar.com/practicalphp/5/3/0
    -->
    <?php foreach($menuItems as $dish => $item){ ?>
    <li><a href="dish.php?item=<?php echo $dish; ?>">
      <?php echo $item ['title'];?></a>
      <sup> $</sup><?php echo $item['price']; ?>
    </li>
      <?php } ?>
  </ul>
  <!-- the href link is needed for POST method to get info such as $item and it's value.
  ?item=something creates a var $item, it's value 'something' -->
</div> <!-- menu items -->

<?php include('includes/footer.php');?>
