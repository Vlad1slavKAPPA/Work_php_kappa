<?php
	$json = '{
		"ru": ["пн", "вт", "ср"],
		"en": ["mn", "tu", "wd"]
	}';
    $data = json_decode( $json);
    echo $data->ru[3] . '<br>';
?>