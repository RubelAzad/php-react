<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

//$api_key = 'YOUR_API_KEY'; // Replace with your travel API key
$endpoint = 'https://dummyjson.com/products'; // Replace with your travel API endpoint

$response = file_get_contents($endpoint);
echo $response;

