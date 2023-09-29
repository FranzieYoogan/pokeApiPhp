
<?php
include ('./head.inc.php');
include('./header.php');




// Initialize a new cURL session
$curl = curl_init();

// Set the cURL options

for($y =1; $y < 101 ; $y ++) {




curl_setopt($curl, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/$y/?offset=0&limit=100");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


// Execute the cURL session and store the result in $response
$response2 = curl_exec($curl);

// Close the cURL session
curl_close($curl);

// Process the API response (e.g., display it or store it in a database)
$data = json_decode($response2,true);

    echo "<h1>$data[name]</h1>";

}

?>
  
 

   


