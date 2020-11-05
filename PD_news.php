<?php

$xml = simplexml_load_file("https://www.news-medical.net/tag/feed/Parkinsons-Disease.aspx");

echo "<ul>";
foreach($xml->channel->item as $itm) {
  $title = $itm->title;
  $link = $itm->link; 
  $descript = $itm->description;
  $date = $itm->pubDate;
  echo '<hr><li><a href='.$link.'">' .$title. '</a>';
  echo "<br>";
  echo $descript. '</li>';
  echo "<br>";
  echo $date; 
}
echo "</ul>";
?>
