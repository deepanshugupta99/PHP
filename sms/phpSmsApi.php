//this code is reference in textlocal.in

// you need to copy and paste the after then register on textlocals and register as promotional route or quick transactional route to send the message

	// Authorisation details.
	$username = "";  //enter your user name provided by textlocals
	$hash = "";   // enter your hash code provided by textlocals

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = ""; // This is who the message appears to be from.  (enter your sender id provided by textlocals 
	$numbers = 9898899898; // A single number or a comma-seperated list of numbers
	$message = "";   //enter your message here
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
