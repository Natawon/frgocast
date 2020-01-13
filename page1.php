<?php


$username = 'admindootv';
$password = 'vrthefrog';
$data = array(
// "restURI" => "http://localhost:8087/v2/servers/_defaultServer_/vhosts/_defaultVHost_/applications/myStream/pushpublish/mapentries/ppsource",
// "serverName" => "_defaultServer_",
//         "sourceStreamName" => "myStream",
//         "entryName" => "RTMP",
//         "profile" => "rtmp",
//         "host" => "rtmp",
//         "application" => "myStream",
//         "streamName"=>   "test",
//         "userName" => "",
//         "password"=> "",
//         "debugPackets"=>"true",
//         "sendReleaseStream"=>"false",
//         "sendStreamCloseCommands"=>"false",
//         "debugLog"=>"true",
//         "destinationName"=>"rtmp",


        "restURI" => "http://sg-live-11.open-cdn.com:8087/v2/servers/_defaultServer_/vhosts/_defaultVHost_/applications/testlive",
   "name" => "testlive",
//    "appType" => "LiveHTTPOrigin",    
   "appType" => "Live",
   "clientStreamReadAccess" => "*",
   "clientStreamWriteAccess" => "*",
   "description"=> "A basic live application",
   "streamConfig" => [
      "restURI"=> "http://sg-live-11.open-cdn.com:8087/v2/servers/_defaultServer_/vhosts/_defaultVHost_/applications/testlive/streamconfiguration",
      "streamType"=> "live"
   ]

        ); 
    $data_string = json_encode($data);
$url = 'http://sg-live-11.open-cdn.com:8087/v2/servers/_defaultServer_/vhosts/_defaultVHost_/applications/testlive';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec( $ch );
// echo $result;
// echo "data";
?>