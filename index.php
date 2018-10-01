<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST"){
	$requestbody = file_get_contents('php://input');
	$json = json_decode($requestbody);

	$text = $json->result->parametes->text;

	switch ($text) {
		case 'hi':
			$speech = "Hi, nice to meet you";
			break;
		case 'how are you':
			$speech = "I am good";
			break;
		case 'thank you':
			$speech = "welcome";
			break;
		case 'what is my current balance':
			$speech = "Your current balance is $1,000";
			break;
		case 'What is Tradesocio':
			$speech = "TradeSocio offers investors state-of-the-art disruptive technological solutions.";
			break;			
		default:
			$speech = "Sorry, I did not get that, Please ask me something else.";
			break;
	}

	$response = new \stdclass();
	$response->speech = "";
	$response->displayText = "";
	$response->source = "webhook";
	echo json_encode($response);

}
else{

	echo("Method not allowed");
}


?>