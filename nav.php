<ul>
<?php
foreach ($navItems as $item){
  //echo "<li><a href={$item[slug]}>{$item[title]}</a></li>";
  echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
};
 // backward slash \ is for escaping the item right after (here ")
//The one with the curly braces is complex syntax whilst the used one is simple. 
//See php documentation for more.
?>
</ul>
