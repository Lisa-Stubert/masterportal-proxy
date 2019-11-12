<?php

// Depending on how big the external sources are, you might need to adjust this
set_time_limit(60 * 5);
ini_set('memory_limit','256M');

// Taking the query appart and reattaching it
$query = "?";
foreach($_GET as $key => $value){
	if($key != "domain" && $key != "uri"){
		if($query != "?"){
			$query .= "&";
		}
		$query .= $key."=".$value;
	}
}

// Run the query and output
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://".$_GET["domain"]."/".$_GET["uri"].$query);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo curl_exec($ch);
curl_close ($ch);

?>