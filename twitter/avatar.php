<?php

chdir(dirname(__FILE__));

error_reporting(-1);

$config = parse_ini_file(dirname(__DIR__) . '/config.ini');

require dirname(__DIR__) . '/vendor/autoload.php';

require_once '../../heticoon/src/class.deicon.php';

$logo = new Deicon;

$settings = array(
    'oauth_access_token' => $config['twitter_access_token'],
    'oauth_access_token_secret' => $config['twitter_access_token_secret'],
    'consumer_key' => $config['twitter_api_key'],
    'consumer_secret' => $config['twitter_api_secret_key']
);

$url = 'https://api.twitter.com/1.1/account/update_profile_image.json';
$file = file_get_contents('564011_10150987745223956_1777701739_n.jpg');
$image = base64_encode($logo);
$postfield = ['image' => $image];
$requestMethod = 'POST';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setPostfields($postfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
