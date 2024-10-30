<?php

function bizzar_photobucket_slideshow_handler($atts, $content = null){
	$feed = htmlentities($atts["feed"]);
	$ss = "<div style='width:480px;text-align:right;'>
		<embed width='480' height='360' 
			src='http://static.pbsrc.com/flash/rss_slideshow.swf' 
			flashvars='rssFeed=".$feed."' 
			type='application/x-shockwave-flash' wmode='transparent' /></div>";
	return $ss;
}

function bizzar_photobucket_thumbnails_handler($atts, $content = null){
	$content = file_get_contents($atts["feed"]);
	$x = new SimpleXmlElement($content);
	$th = "";
	foreach($x->channel->item as $entry){
	  $thstr = $entry->description;
	  $start = strpos($thstr,"<img src") + 10;
	  $stop = strpos($thstr,"\"",$start);
	  $th_photo = substr($thstr,$start,($stop-$start));
	  $photo = $entry->guid;
	  $th.= "<a href='".$photo."' target='_blank'><img src='".$th_photo."'></a> ";
	}
	return $th;
}

?>