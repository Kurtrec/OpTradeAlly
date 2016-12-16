<?php
echo $_POST[SteamId];
$CURL=curl_init('http://node-serv-tradebot.44fs.preview.openshiftapps.com/');
                 
curl_setopt($CURL,CURLOPT_POST,true);
curl_setopt($CURL,CURLOPT_POSTFIELDS,http_build_query(["SteamId"=>$_POST[SteamId]]));
curl_exec($CURL);
?>
