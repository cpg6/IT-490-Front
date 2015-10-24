<?php 

require_once("new_rabbitMQ/rabbitMQLib.inc");
require_once('new_rabbitMQ/path.inc');
require_once('new_rabbitMQ/get_host_info.inc');
require_once("new_rabbitMQ/logger.inc");

//$creds = array($_POST["username"]=>$_POST["password"]);
$creds = array("username"=>"agoldman",
"password"=>"bodypillow");
$creds2 = json_encode($creds);
$thing = "login";
$logger = new logger("logger.inc");
echo $creds2;

try 
{
	$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
	if (isset($argv[1]))
	{
  		$msg = $argv[1];
	}
	else
	{
  		$msg = "test message";
	}
	var_dump(array($thing,$creds2));
	$response = $client->send_request(array($thing, $creds2));
	$logger->log("received",$response);
	var_dump($response);
	if ($response == "true")
	{
		header('Location: home.html');
	}

}
catch (Exception $e) 
{
	$logger->log("error", $e->geMessage());
}
	  // Then validate session to home.html

	  ?>


