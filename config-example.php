<?php

// 1. Create a new API client: https://www.instagram.com/developer/clients/manage/
// 2. Copy/pase the client ID/secret:

$client_id = '...';
$client_secret = '...';

// 3. Load the included instagram.php
// 4. Copy the code returned from Instagram
// 5. Paste it into this curl command in your terminal

/*

curl -F 'client_id=CLIENT_ID' \
    -F 'client_secret=CLIENT_SECRET' \
    -F 'grant_type=authorization_code' \
    -F 'redirect_uri=AUTHORIZATION_REDIRECT_URI' \
    -F 'code=CODE' \
    https://api.instagram.com/oauth/access_token

*/

// 6. Copy/paste the resulting access_token into the variable below

// $access_token = '...';
