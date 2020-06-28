<?php

header('Content-Type: application/json');

$userid = $_GET['userid'];
$sessionid = $_GET['sessionid'];
if (!$userid) {
    echo "Please enter an params.";
} elseif(!$sessionid){
    echo "Please enter an params.";
}else{
   $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.instagram.com/session/login_activity/?__a=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0",
    "Accept-Language: en-US,en;q=0.5",
    "X-Requested-With: XMLHttpRequest",
    "Cookie: mid=missing; csrftoken=missing; sessionid=$sessionid; ds_user_id=$userid"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo "$response\n";
 
    
}
