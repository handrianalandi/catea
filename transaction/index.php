<?php
    $response = array();

    // //Entry data transaction
    // $response["status"] = "success";
    // $response["message"] = "Transaction created successfully";
    // $response["data"] = array(
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
    // $response["message"] = "Item added successfully";
    // $response["data"] = array(
    //     "id_transaction"=>"1",
    //     "id_item"=>"1",
    //     "item_quantity"=>"3",
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan item pada transaction detail berdasarkan transaction(fetch?)
    // $response["status"] = "success";
    // $response["message"] = "Transaction Fetch successfully";
    // $response["data"] = array(
    //     "id_transaction"=>"1",
    //     "id_stall"=>"1",
    //     "id_employee"=>"1",
    //     "id_membership"=>"1",
    //     "timestamp"=>"10-04-19 12:00:17",
    //     "total"=>"25000",
    //     "items"=>[
    //         array(
    //             "id_recipe"=>"1",
    //             "recipe_name"=>"Boba Tea",
    //             "item_quantity"=>"3",
    //         ),
    //         array(
    //             "id_recipe"=>"2",
    //             "recipe_name"=>"Coffee",
    //             "item_quantity"=>"2",
    //         )
    //     ]
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan item pada transaction detail berdasarkan transaction(fetch?) not found
    // $response["status"] = "Not Found";
    // $response["message"] = "Transaction not found";
    
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