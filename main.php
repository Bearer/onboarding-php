<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Exception\TransportException;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

\Bearer\Agent::init([
  'secretKey' => getenv('BEARER_SECRET_KEY')
]);

$client = HttpClient::create();

echo("-- Waiting for initialization --\n");
sleep(10);


// Postman Echo

echo("-- Sending API Calls to Postman-echo --\n");

$client
  ->request('GET', 'https://postman-echo.com/status/404', [
    'headers' => [
        'password' => 'h4x0r',
        'secret' => 'secret key'
    ]
  ])
  ->getContent(false);

$client
  ->request('GET', 'https://postman-echo.com/status/403', [
    'headers' => [
        'password' => 'h4x0r',
        'secret' => 'secret key'
    ]
  ])
  ->getContent(false);

$client
  ->request('GET', 'https://postman-echo.com/status/429', [
    'headers' => [
        'password' => 'h4x0r',
        'secret' => 'secret key'
    ]
  ])
  ->getContent(false);

$client
  ->request('GET', 'https://postman-echo.com/status/501?email=pii@example.com', [
    'headers' => [
        'password' => 'h4x0r',
        'secret' => 'secret key'
    ]
  ])
  ->getContent(false);

$client
  ->request('POST', 'https://postman-echo.com/post', [
    'json' => [
        'foo' => 'Bar'
    ]
  ])
  ->getContent(false);

$client
  ->request('GET', 'https://postman-echo.com/status/200', [
    'headers' => [
        'password' => 'h4x0r',
        'secret' => 'secret key'
    ]
  ])
  ->getContent(false);


// NASA API

echo("-- Sending API Calls to NASA API --\n");

$client
  ->request('GET', 'https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY')
  ->getContent(false);


// Star Wars API

echo("-- Sending API Calls to SWAPI --\n");

$client
  ->request('GET', 'https://swapi.dev/api/people/1/')
  ->getContent(false);

$client
  ->request('GET', 'https://swapi.dev/api/people/9/')
  ->getContent(false);

$client
  ->request('GET', 'https://swapi.dev/api/starships/9/')
  ->getContent(false);


// Foo Bar -> Non Existing API

echo("-- Sending API Calls to non existing API --\n");

try {
  $client
    ->request('GET', 'https://foo.bar/status/200')
    ->getContent(false);
} catch (TransportException $e) {}
