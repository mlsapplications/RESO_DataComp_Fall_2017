<?php
// THIS DOESN'T WORK
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "https://rets.io/api/v1/OData/sandicor/Members?access_token=6ae67178e9cac8cc2a251153b6e22cfd"
));
$resp = curl_exec($curl);
$agents = json_decode($resp, true); // decode the JSON feed

echo $agents[0]['MemberFirstName'];

foreach ($agents as $agent) {
	echo $agent['MemberFirstName'] . '<br>';
	echo 'agent processed';
}

echo "done";
?>
