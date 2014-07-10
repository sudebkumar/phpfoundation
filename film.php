<?php 
$films =array(
        "genres" => array( "comedy","tragedy","action","romantic"),
		"film-titles" => array( "Big", "Star Wars", "Titanic","French Kiss"),
		"stars" => array ("Bill Murrey","Merk Hammell"."Leonard Dicaprio","Cate Blanchell"),);
		
		echo "<pre>";
		print_r ($films);
		echo "</pre>";
		
	$counter=0;
	foreach ($films as $key=>$genres)
	{
	echo $key."-".
	$genres."<br/>";
	$counter++;
	}
		