<?php

	$my_url = "www.guru99.com";
	if (preg_match("/guru/", $my_url))
	{
		echo "the url $my_url contains guru";
	}
	else
	{
		echo "the url $my_url does not contain guru";
	}

	/*$my_text="I Love Regular Expressions";

	$my_array  = preg_split("/ /", $my_text);

	print_r($my_array );*/



	/*$text = "We at Guru99 strive to make quality education affordable to the masses. Guru99.com";

	$text = preg_replace("/Guru/", '<span style="background:yellow">Guru</span>', $text);

	echo $text;*/
	
?>