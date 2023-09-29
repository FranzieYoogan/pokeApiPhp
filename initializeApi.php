<?php include('./head.inc.php') ?>




<?php
// Initialize a new cURL session
$curl = curl_init();

// Set the cURL options
curl_setopt($curl, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/?limit=100&offset=0/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session and store the result in $response
$response = curl_exec($curl);

// Check for errors
if (curl_errno($curl)) {
    // Handle the error (e.g., log it or display an error message)
    echo "cURL error: " . curl_error($curl);
} else {
    // Process the API response (e.g., display it or store it in a database)
    $decoded = json_decode($response,true);
    //  print_r($decoded) ;
}

// Close the cURL session
curl_close($curl);


?>

<?php foreach($decoded as $name ) {
    if(isset($name['name'])) {
    $name['name'];  
      
     
}}
 ?>
