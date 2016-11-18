<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Atlas\Proxy();

$app->get('/geocode/{address}', function (\Atlas\Proxy $app, $address) {

	$response = $app->geocode( $address );

	return $app->json( $response );
});

$app->run();
