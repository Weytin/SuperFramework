<?php
$campaign = mysql_query("SELECT * FROM hot_campaigns ORDER BY `id` DESC"); 

if(mysql_num_rows($campaign) == 0)
{
	echo ''; 
}
else
{
	echo '<div class="habblet-container ">';
	echo '<div class="cbb clearfix red ">';
	echo '<h2 class="title">What\'s Going on?</h2>
    <div id="hotcampaigns-habblet-list-container">
    <div class="hotcampaign-container">';
}
 
while($row = mysql_fetch_array($campaign))
{
	$id = $row["id"];
    $caption = $row["caption"];
    $image_url = $row["image_url"];
    $descr = $row["descr"];
    $url = $row["url"];
           
    echo '<ul id="hotcampaigns-habblet-list">
          <li class="even">
          <a href="'.$url.'">
          <img src="'.$image_url.'" align="left" alt="'.$caption.'" /></a>
          <h3>'.$caption.'</h3>
          <p>'.$descr.'</p>
          <p class="link"><a href="'.$url.'">Go there &raquo;</a></p>
          </li> </ul>
         ';
}
?>