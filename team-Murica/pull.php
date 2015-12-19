<?php 

require_once("new_rabbitMQ/rabbitMQLib.inc");
require_once('new_rabbitMQ/path.inc');
require_once('new_rabbitMQ/get_host_info.inc');
require_once("new_rabbitMQ/logger.inc");

$test = "test";
echo $test;

/*
$creds = array($_POST["username"],$_POST["password"]);
//$creds = array('agoldman','bodypillow');
$thing = "login";
$logger = new logger("logger.inc");

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
	var_dump(array($thing,$creds));
	$response = $client->send_request(array($thing, $creds));
	$logger->log("received",$response);
	var_dump($response);
	if ($response == "True")
	{
		var_dump($response);
		header('Location: home.html');
	}

}
catch (Exception $e) 
{
	$logger->log("error", $e->geMessage());
}
	  // Then validate session to home.html

	  ?>
*/
?>
