<?php
    $response = array();

    // //Entry data transaction
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Transaction created successfully",
    //     "id_transaction"=>"1",
    //     "id_stall"=>"1",
    //     "id_employee"=>"1",
    //     "id_membership"=>"1",
    //     "timestamp"=>"10-04-19 12:00:17",
    //     "total"=>"25000",
    // );
    // http_response_code(200);


    // //Add item into transaction
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Item added successfully",
    //     "id_transaction"=>"1",
    //     "id_item"=>"1",
    //     "item_quantity"=>"3",
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan item pada transaction detail berdasarkan transaction(fetch?)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"transaction fetch successfully",
    //     "id_transaction"=>"1",
    //     "id_stall"=>"1",
    //     "id_employee"=>"1",
    //     "id_membership"=>"1",
    //     "timestamp"=>"10-04-19 12:00:17",
    //     "total"=>"25000",
    //     "items"=>[
    //         array(
    //             "id_item"=>"1",
    //             "item_quantity"=>"3",
    //         ),
    //         array(
    //             "id_item"=>"2",
    //             "item_quantity"=>"2",
    //         )
    //     ]
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan item pada transaction detail berdasarkan transaction(fetch?) not found
    $response["status"] = "Not Found";
    $response["data"] = array(
        "message"=>"transaction not found",
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