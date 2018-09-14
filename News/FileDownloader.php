<?PHP

$xml = file_get_contents("http://timesofindia.indiatimes.com/rssfeedstopstories.cms"); // your file is in the string "$xml" now.
if(file_put_contents("TimesOfIndia/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://www.deccanherald.com/rss-internal/top-stories.rss"); // your file is in the string "$xml" now.
if(file_put_contents("DeccanHerald/TopStories.xml", $xml)){

} else {
	echo "Failed";
}

$xml = file_get_contents("http://feeds.feedburner.com/NdtvNews-TopStories?format=xml"); // your file is in the string "$xml" now.
if(file_put_contents("NDTV/TopStories.xml", $xml)){
	//echo " \n NDTV Successfull";
} else {
	echo "Failed";
}

$xml = file_get_contents("http://indiatoday.intoday.in/rss/homepage-topstories.jsp"); // your file is in the string "$xml" now.
if(file_put_contents("IndiaToday/TopStories.xml", $xml)){

} else {
	echo "Failed";
}

$xml = file_get_contents("http://indianexpress.com/section/india/feed/"); // your file is in the string "$xml" now.
if(file_put_contents("IndianExpress/TopStories.xml", $xml)){

} else {
	echo "Failed";
}

$xml = file_get_contents("http://www1.cbn.com/app_feeds/rss/news/rss.php?section=top"); // your file is in the string "$xml" now.
if(file_put_contents("CBN/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}
$xml = file_get_contents("http://www.thehindu.com/?service=rss"); // your file is in the string "$xml" now.
if(file_put_contents("TheHindu/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://economictimes.indiatimes.com/rssfeedstopstories.cms"); // your file is in the string "$xml" now.
if(file_put_contents("TheEconomicTimes/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://www.dnaindia.com/syndication/rss,catID-2.xml"); // your file is in the string "$xml" now.
if(file_put_contents("DNAIndia/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://www.business-standard.com/rss/home_page_top_stories.rss"); // your file is in the string "$xml" now.
if(file_put_contents("BusinessStandard/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://www.thehindubusinessline.com/news/?service=rss"); // your file is in the string "$xml" now.
if(file_put_contents("HinduBusinessLine/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://www.centralchronicle.com/national-news/feed"); // your file is in the string "$xml" now.
if(file_put_contents("CentralChronicle/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://www.mid-day.com/Resources/midday/rss/news-national.xml"); // your file is in the string "$xml" now.
if(file_put_contents("MidDay/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://www.asianage.com/rss/38"); // your file is in the string "$xml" now.
if(file_put_contents("AsianAge/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://www.tribuneindia.com/rss/feed.aspx?cat_id=7"); // your file is in the string "$xml" now.
if(file_put_contents("TheTribune/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}

$xml = file_get_contents("http://www.financialexpress.com/feed/"); // your file is in the string "$xml" now.
if(file_put_contents("TheFinancialExpress/TopStories.xml", $xml)){
	
} else {
	echo "Failed";
}


?>