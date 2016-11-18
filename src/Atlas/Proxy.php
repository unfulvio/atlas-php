<?php

namespace Atlas;

use Geocoder\Provider\GoogleMaps;
use Ivory\HttpAdapter\CurlHttpAdapter;
use Silex\Application;

/**
 * Google Maps Proxy
 *
 * @package Atlas
 */
class Proxy extends Application  {

	/**
	 * Geocode an address.
	 *
	 * @param string $address Requested address to geocode.
	 * @return array
	 */
	public function geocode( $address ) {

		$adapter  = new CurlHttpAdapter();
		$geocoder = new GoogleMaps( $adapter, 'en_US', null, true, '' );
		$response = $geocoder->geocode( $address );

		return array(
			'lat'  => $response->first()->getCoordinates()->getLatitude(),
			'lon' => $response->first()->getCoordinates()->getLongitude(),
		);
	}

}
