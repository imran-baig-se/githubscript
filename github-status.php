<?php
/**
 * Created by PhpStorm.
 * User: imranbaig
 * Date: 3/8/17
 * Time: 10:55 PM
 */


$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL            => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING       => "",
    CURLOPT_MAXREDIRS      => 10,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST  => "GET",
    CURLOPT_POSTFIELDS     => "{\n  \"scopes\": [\n    \"public_repo\"\n  ],\n  \"note\": \"admin script\",\n  \"client_id\":\"93dafb4fe4234708d0a6\"\n}",
    CURLOPT_HTTPHEADER     => [
        "authorization: token f30bb9f8dce3cbad632fd30893d883fe06bc1bcf",
        "cache-control: no-cache",
        "content-type: application/json",
        "User-Agent: my github api",
    ],
]);

$response = curl_exec($curl);
$err      = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
