<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">


<?php

$html = "";

$url = "http://www.realbeta.net63.net/blog/rss?id=1";
$xml = simplexml_load_file($url);
for($i = 0; $i < 1; $i++){
  
	$title = $xml->channel->item[$i]->title;
	$link = $xml->channel->item[$i]->link;
	$description = $xml->channel->item[$i]->description;
	$pubDate = $xml->channel->item[$i]->pubDate;
	

	$html .= "<a target='_blank' href='$link'><b>$title</b></a>"; // Title of post
	$html .= "$description"; // Description
	$html .= "<br />$pubDate<br /><br />"; // Date Published
}
echo "$html<br />";

?>

