<?php
    $response = array();

    // // //Entry data delivery
    // $response["status"] = "success";
    // $response["message"] = "Delivery created successfully";
    // $response["data"] = array(
    //     "id_employee_sender "=>"1",
    //     "id_warehouse_origin "=>"1",
    //     "id_stall_destination "=>"1",
    //     "departure_timestamp"=>"2019-12-12 12:12:12",
    //     "arrival_timestamp"=>"2019-12-12 12:12:12",
    //     "description"=>"Delivery description",
    //     "status"=>"1"
    // );
    // http_response_code(200);

    // // //Add ingredient to delivery
    // $response["status"] = "success";
    // $response["message"] = "Ingredient added to delivery successfully";
    // $response["data"] = array(
    //     "id_delivery"=>"1",
    //     "id_ingredient"=>"1",
    //     "ingredient_quantity"=>"3"
    // );
    // http_response_code(200);
    
    // // //Update Departure Time Stamp
    // $response["status"] = "success";
    // $response["message"] = "Departure Time Stamp updated successfully";
    // $response["data"] = array(
    //     "id_delivery"=>"1",
    //     "departure_timestamp"=>"2019-12-25 12:12:12"
    // );
    // http_response_code(200);

    // //  //Update Arrival Time Stamp
    // $response["status"] = "success";
    // $response["message"] = "Arrival Time Stamp updated successfully";
    // $response["data"] = array(
    //     "id_delivery"=>"1",
    //     "arrival_timestamp"=>"2020-01-05 12:12:12"
    // );
    // http_response_code(200);

    // //  //Update description Time Stamp
    // $response["status"] = "success";
    // $response["message"] = "Description updated successfully";
    // $response["data"] = array(
    //     "id_delivery"=>"1",
    //     "description"=>"New description"
    // );
    // http_response_code(200);

    // // //Update Delivery Item
    // $response["status"] = "success";
    // $response["message"] = "Delivery Item updated successfully";
    // $response["data"] = array(
    //     "id_delivery"=>"1",
    //     "id_ingredient"=>"1",
    //     "ingredient_quantity"=>"4"
    // );
    // http_response_code(200);

    // // //Update Delivery Status
    // $response["status"] = "success";
    // $response["message"] = "Delivery Status updated successfully";
    // $response["data"] = array(
    //     "id_delivery"=>"1",
    //     "status"=>"2"
    // );
    // http_response_code(200);

    // // //Fetch delivery detail
    // $response["status"] = "success";
    // $response["message"] = "Delivery detail fetched successfully";
    // $response["data"] = array(
    //     "id_delivery"=>"1",
    //     "id_employee_sender"=>"1",
    //     "id_warehouse_origin"=>"1",
    //     "id_stall_destination"=>"1",
    //     "departure_timestamp"=>"2019-12-25 12:12:12",
    //     "arrival_timestamp"=>"2020-01-05 12:12:12",
    //     "description"=>"New description",
    //     "status"=>"2",
    //     "ingredients"=>[
    //         array(
    //             "id_delivery"=>"1",
    //             "id_ingredient"=>"1",
    //             "ingredient_quantity"=>"4"
    //         ),
    //         array(
    //             "id_delivery"=>"1",
    //             "id_ingredient"=>"2",
    //             "ingredient_quantity"=>"4"
    //         )
    //     ]
    // );
    // http_response_code(200);

    // // //Fetch delivery detail not found
    // $response["status"] = "Not Found";
    // $response["data"] = array(
    //     "message"=>"Delivery not found",
    // );
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