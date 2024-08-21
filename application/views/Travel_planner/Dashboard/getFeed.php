<?php

    require_once 'env.php';

    // $url = "https://combodeals.com";
    // $url = $baseUrl."$myOwnFbAccountId/feed?access_token=$fbApiKey";
    // $url = $baseUrl."$myOwnFbAccountId/photos?type=uploaded&fields=name,images,created_time&access_token=$sGateFbApiKey";
    $url = $baseUrl."$test3FbPageId/posts?fields=message,created_time,full_picture&access_token=$test3PageAccess";

    $choice = "page";
    // $choice = "person";

    // Initialize a cURL session
    $curl = curl_init();

    // User Agent
    $user_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36';

    // Set the URL you want to fetch
    curl_setopt($curl, CURLOPT_URL, $url);

    // Return the response as a string instead of outputting it directly
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Execute the request
    $response = curl_exec($curl);

    // Check for errors
    if(curl_errno($curl)) {
        echo 'CURL error: ' . curl_error($curl);
    } else {

        // Decode the JSON response into a PHP array
        $feedData = json_decode($response, true);

        // var_dump($feedData);exit;
        // Checking if Any data is Returned
        if(isset($feedData['data'])){

            switch($choice){
                case "person":
                    $feedData = $feedData['data'];
                    ?>
                    <div class='card card-success'>
                        <div class='card-body'>
                            <div class='row'><?php
                                // Getting Latest Post from dataArray
                                foreach ($feedData as $post){
                                    ?>
                                    <div class='col-3'>
                                        <div class='card mb-4 bg-gradient-dark'>
                                            <!-- Feed Image -->
                                            <img class='card-img-top' src='<?=$post['images'][sizeof($post['images'])-1]['source']?>'> <!--  -->
                                            <div class='card-img-overlay d-flex flex-column justify-content-end'>
                                                <?php if(isset($post['name'])){
                                                        // Caption if any
                                                        echo "<a href='https://facebook.com/".@$post['id']."' class='card-text btn btn-outline-primary text-white pb-2 pt-1'>".$post['name']."</a>";

                                                    }
                                                    ?>
                                                    <!-- Uploaded Date -->
                                                    <p class='text-white'>Last update <?=date("Y-m-d h:i a",strtotime($post['created_time']))?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }?>
                            </div>
                        </div>
                    </div><?php
                    break;
                default;
                    break;
            }
        }elseif(isset($feedData['error'])){
            echo "Error => ".$feedData['error']['message'];
            
        }else{
            echo "No Data Found";
        }
    }


    // Close the cURL session
    curl_close($curl);

