<?php
    $response = array();

    // // //Entry penggunaan benefit oleh member
    // $response["status"] = "success";
    // $response["message"] = "Benefit used successfully";
    // $response["data"] = array(
    //     "id_membership "=>"1",
    //     "id_benefit"=>"1",
    //     "id_transaction"=>"1",
    //     "timestamp"=>"2019-01-01 00:00:00"
    // );
    // http_response_code(200);

    // // // Fetch data benefit (contoh by id_membership)
    // $response["status"] = "success";
    // $response["message"] = "Benefit fetched successfully";
    // $response["data"] = array(
    //     "id_membership "=>"1",
    //     "history"=>[
    //         array(
    //             "id_benefit"=>"1",
    //             "benefit_name"=>"Benefit 1",
    //             "discount"=>"10",
    //             "id_transaction"=>"1",
    //             "timestamp"=>"2019-01-01 00:00:00"
    //         ),
    //         array(
    //             "id_benefit"=>"2",
    //             "benefit_name"=>"Benefit 2",
    //             "discount"=>"20",
    //             "id_transaction"=>"2",
    //             "timestamp"=>"2019-01-02 00:00:00"
    //         )
    //     ]
    // );
    // http_response_code(200);

    // // // Fetch data benefit (contoh by timestamp) 
    $response["status"] = "success";
    $response["message"] = "Benefit fetched successfully";
    $response["data"] = array(
        "timestamp"=>"2019-01-01 00:00:00",
        "history"=>[
            array(
                "id_membership "=>"1",
                "id_benefit"=>"1",
                "benefit_name"=>"Benefit 1",
                "discount"=>"10",
                "id_transaction"=>"1",
            ),
            array(
                "id_membership "=>"2",
                "id_benefit"=>"1",
                "benefit_name"=>"Benefit 2",
                "discount"=>"20",
                "id_transaction"=>"2",
            )
        ]
    );
    http_response_code(200);

    // // // Fetch data benefit (contoh by timestamp) not found
    // $response["status"] = "Not Found";
    // $response["message"] = "Benefit not found";
    
    // http_response_code(404);


    
    

    
    header('Content-Type: application/json');
    // STATUS CODE
    // 200 -> success
    // 201 -> success created
    // 400 -> bad request 
    // 401 -> unauthorized
    // 404 -> not found
    
    echo json_encode($response);
?>