<?php
define('GOOGLE_CLIENT_ID', '782234278327-3hd14cm4eijm9hb9lgeb47o4lr9judfm.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'http://localhost/stark_ecommerce/login.php');


define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'stark_ecommerce');
define('DB_USER_TBL', 'users');

// Start session
if (!session_id()) {
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>