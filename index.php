<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
        
	$text = $json->queryResult->queryText;
	
    if (strpos($text, 'balance') !== false)
    {
        $text = "balance";
    }
    
	switch ($text) {
		case 'balance':
		$check->fulfillmentText = "Your balance is $1000 ";
			//$check->displayText = "Hi, Nice to meet you";
			//$check->source = "webhook-echo-sample";
			break;
        case 'hi':
            $check->fulfillmentText = "Hi, Its a worderful day , welcome to the Tradesocio ";
            //$check->displayText = "Hi, Nice to meet you";
            //$check->source = "webhook-echo-sample";
            break;
		case 'bye-bye':
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
		$check->fulfillmentText = "Sorry I did not get that...!!";
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
