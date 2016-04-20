<?php

require_once 'config.php';

$redirect_url = 'http://localhost/ajax-demo/instagram.php';
$auth_url = "https://api.instagram.com/oauth/authorize/?client_id=$client_id&redirect_uri=$redirect_url&response_type=code";

$lat = 40.6981432;
$lng = -89.6182068;

if (!empty($access_token)) {
	$ch = curl_init();
	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, "https://api.instagram.com/v1/users/self/media/recent/?access_token=$access_token");
	curl_setopt($ch, CURLOPT_HEADER, 0);

	header('Content-Type: application/json');
	// grab URL and pass it to the browser
	curl_exec($ch);

	// close cURL resource, and free up system resources
	curl_close($ch);
} else if (!empty($_GET['code'])) {
	$code = $_GET['code'];
	echo $code;
} else {
	header("Location: $auth_url");
}


/*

curl -F 'client_id=7adff5ce182944a39230a52353364309' \
    -F 'client_secret=1cbf9c139299449089677cd93834002d' \
    -F 'grant_type=authorization_code' \
    -F 'scope=public_content' \
    -F 'redirect_uri=http://localhost/ajax-demo/instagram.php' \
    -F 'code=f612d38d94714c3ea32e1b3798202b3f' \
    https://api.instagram.com/oauth/access_token

*/

?>
