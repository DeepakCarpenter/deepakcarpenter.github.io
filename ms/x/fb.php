<?php

require '../facebook.php';
$facebook = new Facebook(array(
'appId' => '190499737732728',
'cookie' => false

));


try {

$parameters['access_token'] = "AAAAAC3zphqEBAIZAT5kXJaqL3fe8cGuXSmubE2KX476kFUxzPgm07ZCFGAEZCnrRu41iUdoSOyE94Q5bH7kHaCY7ZBd9irnGoQINnlFryQZDZD";
$userData = $facebook->api('/me/feed?limit=5', $parameters);
} catch (FacebookApiException $e) {
}echo $userData[message][2];?>
