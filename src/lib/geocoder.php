<?php

	
	/* Uses bing Geocoder for the United States.
	*	Based on API documentation found here: https://msdn.microsoft.com/en-us/library/ff701714.aspx
	*		Found Under:
	* 		MSDN Library -> Online Services -> Bing -> Maps -> Bing Maps REST Services
	*			-> Locations -> Find a Location by Address
	*/
	
	/* INPUT: street, city, state, and zip info
	* OUTPUT: Successful: Array: ['lat'] and ['long'] keys
	*			Failed: Boolean value: false
	*/

	define('MY_XML_FILENAME', __dir__ . "/../../public_html/xml/myxml.xml");
	use GuzzleHttp\Client;
	
	function bingGeocode($street, $city, $state, $zip) {

		/* Where the API is located (no ending backslash) */
		$BINGMAPS_API_PATH = "http://dev.virtualearth.net/REST/v1/Locations/US";
		
		/* options could be xml or json */
		$options = "xml";
		
		/* URL safe characters */
		$street_urlsafe = urlsafeify($street);
		$city_urlsafe = urlsafeify($city);
		$state_urlsafe = urlsafeify($state);
		$zip_urlsafe = urlsafeify($zip);
		
		/* construction or request URL */
		$url = $BINGMAPS_API_PATH . '/' . $state_urlsafe . '/' . $zip_urlsafe . '/' . $city_urlsafe . '/'
			. $street_urlsafe . '?' . 'o=' . $options . '&key=' . getenv('BING_API_KEY');
		
		// send request to api using Guzzle http client
		$guzzle = new Client();
		$res = $guzzle->request('GET', $url);
		$body = $res->getBody();
		
		//parse
		$sxml = new SimpleXMLElement($body);

		//get relevent data
		$sxml->registerXPathNamespace("x", "http://schemas.microsoft.com/search/local/ws/rest/v1");
		
		//for debugging
		$sxml->asxml(constant('MY_XML_FILENAME'));
		
		$lat = $sxml->xpath('//x:Latitude');
		$long = $sxml->xpath('//x:Longitude');
		
	
		/* construct a results list */
		$response = Array();
		
		/* check match confidence */
		$matchCodes = $sxml->xpath('//x:MatchCode');

		foreach ($matchCodes as $code) {
			if (($code == 'Ambiguous') || ($code == 'UpHierarchy')) {
				$results = false;
				return $results;
			}
		}
		
		//latitude or longitude could not be found!
		if (($lat === false) || ($long === false)) {
			$results = false;
			//echo "No Data!!!";
			return $results;
		}
		
		$results['lat'] = $lat[0];
		$results['long'] = $long[0];
		
		return $results;
	}
	
	/* Curl function retreives data for geocoder */
	/* Based on function found here: https://davidwalsh.name/curl-download */
	function get_data($url) {
		/* Initiate curl */
		$ch = curl_init();
		
		/* Settings */
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		
		/* make the request */
		$data = curl_exec($ch);
		curl_close($ch);
		
		/* return the retreived data */
		return $data;
	}
	
	function urlsafeify($str) {
		//non strings should be strings
		if (is_string($str) == false) {
			$str = strval($str);
		}
		
		$str = rawurldecode($str);
		
		//remove '.', ',', ';', '+', and '-' per API documentation
		$specialChars 	= array(".",	",", 	";", 	"+", 	'-' );
		$escapeTags 	= array("",		"",		"",		"",		"");
		$str = str_replace($specialChars, $escapeTags, $str);
		
		//urlencode the rest
		$str = rawurlencode($str);
		
		//empty strings should use placeholder '-' per API documentation
		if ( empty($str) == true ) {
			return '-';
		}
		
		return $str;
		
	}
	
?>
