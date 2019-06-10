<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>
<?php

    $html = "";

	$url = "http://rss.nytimes.com/services/xml/rss/nyt/Sports.xml";
	$xml = simplexml_load_file($url);
	for($i = 0; $i < 1; $i++){
  
		$title = $xml->channel->item[$i]->title;
		$link = $xml->channel->item[$i]->link;
		$description = $xml->channel->item[$i]->description;
		$pubDate = $xml->channel->item[$i]->pubDate;
		
		$html .= "<ul><li>Link: <a target='_blank' href='$link'><b>$title</b></a></li>"; 
		$html .= "<li>Description: $description </li>"; 
		$html .= "<li>Publication Date: $pubDate</li></ul>";
	
}
echo "$html";
?>

</body>
</html>
