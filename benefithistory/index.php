<?php
    $response = array();

    // //Entry penggunaan benefit oleh member
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Benefit history added successfully",
    //     "id_membership "=>"1",
    //     "id_benefit"=>"1",
    //     "id_transaction"=>"1",
    //     "timestamp"=>"2019-01-01 00:00:00"
    // );
    // http_response_code(200);

    // // Fetch data benefit (contoh by id_membership)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Benefit history fetched successfully",
    //     "id_membership "=>"1",
    //     "history"=>[
    //         array(
    //             "id_benefit"=>"1",
    //             "id_transaction"=>"1",
    //             "timestamp"=>"2019-01-01 00:00:00"
    //         ),
    //         array(
    //             "id_benefit"=>"2",
    //             "id_transaction"=>"2",
    //             "timestamp"=>"2019-01-02 00:00:00"
    //         )
    //     ]
    // );
    // http_response_code(200);

    // // Fetch data benefit (contoh by timestamp) 
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Benefit history fetched successfully",
    //     "timestamp"=>"2019-01-01 00:00:00",
    //     "history"=>[
    //         array(
    //             "id_membership "=>"1",
    //             "id_benefit"=>"1",
    //             "id_transaction"=>"1",
    //         ),
    //         array(
    //             "id_membership "=>"2",
    //             "id_benefit"=>"1",
    //             "id_transaction"=>"2",
    //         )
    //     ]
    // );
    // http_response_code(200);

    // // Fetch data benefit (contoh by timestamp) not found
    $response["status"] = "Not Found";
    $response["data"] = array(
        "message"=>"Benefit history not found",
    );
    http_response_code(404);


    
    

    
    header('Content-Type: application/json');
    // STATUS CODE
    // 200 -> success
    // 201 -> success created
    // 400 -> bad request 
    // 401 -> unauthorized
    // 404 -> not found
    
    echo json_encode($response);
?>