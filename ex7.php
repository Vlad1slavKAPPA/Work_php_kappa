<?php
	$json = '{
		"user": {
			"name": "john",
			"surn": "smit"
		},
		"city": "London"
	}';
    $data = json_decode( $json);
    echo $data->user->name . '<br>';
    echo $data->user->surn . '<br>';
    echo $data->city;
?>