<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->queryResult->queryText;
 
	switch ($text) {
		case 'hi':
		$check->fulfillmentText = "Hi, Its a worderful day ";
			//$check->displayText = "Hi, Nice to meet you";
			//$check->source = "webhook-echo-sample";
			break;

		case 'bye':
		$check->fulfillmentText = "Hi...... bye bye";
		//$check->displayText = "Hi, Nice to meet you";
		//$check->source = "webhook-echo-sample";
			break;

		case 'anything':
		$check->fulfillmentText = "Hi, Nice to meet you anything anything";
		//$check->displayText = "Hi, Nice to meet you";
		//$check->source = "webhook-echo-sample";
			break;
		
		default:
		$check->fulfillmentText = "Default texttttttt";
		//$check->displayText = "Hi, Nice to meet you";
		//$check->source = "webhook-echo-sample";
			break;
	}
 
	echo json_encode($check);
}
else
{
	echo "Method not alloweddddd";
}

?>
