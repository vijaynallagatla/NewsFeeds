<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>
<div class="container-fluid">

	<center> 
		<img src="images/logo.png" class="img img-responsive" style="max-height:90px;"/>
	</center>
</div>
<div data-role="main" class="ui-content">
<?php
$xml=simplexml_load_file("TopStories.xml");
$i=0;
foreach($xml->channel->item as $title) { 
   $title=$xml->channel->item[$i]->title;
   $desc=$xml->channel->item[$i]->description;
   $buildDate="--";
   if($xml->channel->item[$i]->pubDate){
   $buildDate=$xml->channel->item[$i]->pubDate;
   }
   
   $link=$xml->channel->item[$i]->link;
   $i++;
?>
    <div data-role="collapsible">
	
	 <h4>
<?php
   echo $title;

?>
</h4>
<p><u><?php
   echo $buildDate;

?></u></p>
<p><?php
   echo $desc;

?></p>
<a href="<?php echo $link; ?> ">Read More...</a>
</div>
<?php
} 
?>
</div>
</body>
</html>
