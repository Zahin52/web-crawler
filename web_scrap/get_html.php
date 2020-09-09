<?php
$ch = curl_init();
$curlConfig = array(
    CURLOPT_URL            => $_REQUEST['link'],
    CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>