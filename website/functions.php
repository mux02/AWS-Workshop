<?php
function check_login()
{

	if(isset($_SESSION['User_Id']))
	{

		$id = $_SESSION['User_Id'];
		
        // Backend for API
        $url = "https://nwb8aj3czi.execute-api.me-south-1.amazonaws.com/default/AWS_getId"; // Type your API link here

        // Sending request through the following configuration...
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Determine request type and other properties
        $headers = array(
        "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // Assign headers info with the request

        // The data that will be posted with the request
        $data = <<<DATA
        {
            "User_Id": $id
        }
        DATA;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        // For debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl); // Execute our request (POST API)
        curl_close($curl); // Close the connection
        // var_dump($resp); // Identify the result as variable

        // echo $resp; // Print out the result
        
        $user_data = json_decode($resp); // Decoding the result into $user_data variable

        // var_dump($user_data);
        get_object_vars($user_data);

        $data = $user_data->checkAuth; // Get responseCode value inside $resCode variable

        echo $data;
        // var_dump($data);
        // print_r($data);

        if($data == 1) { // IF the responseCode is 2 then go to control page (Successful process)
            return $id;
        } else {
            return 0;
        }

	} else {
        return 0;
    }

}

function redir_login()
{
    if(isset($_SESSION['User_Id']))
	{
		$id = $_SESSION['User_Id'];
		
        // Backend for API
        $url = "https://nwb8aj3czi.execute-api.me-south-1.amazonaws.com/default/AWS_getId"; // Type your API link here

        // Sending request through the following configuration...
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Determine request type and other properties
        $headers = array(
        "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // Assign headers info with the request

        // The data that will be posted with the request
        $data = <<<DATA
        {
            "User_Id": $id
        }
        DATA;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        // For debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl); // Execute our request (POST API)
        curl_close($curl); // Close the connection
        // var_dump($resp); // Identify the result as variable

        // echo $resp; // Print out the result
        
        $user_data = json_decode($resp); // Decoding the result into $user_data variable

        get_object_vars($user_data);

        $data = $user_data->checkAuth; // Get responseCode value inside $resCode variable

        echo $data;
        // print_r($data);

        if($data != 1) { // IF the responseCode is 2 then go to control page (Successful process)
            // echo $data;
            // echo $_SESSION['User_Id'];
            header("Location: login.php");
            die;
        }

	} else {
        //redirect to login
        header("Location: login.php");
        die;
    }
	
}

?>