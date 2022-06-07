<?php
    $response = array();


    // //Entry data warehouse
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Warehouse created successfully",
    //     "name"=>"Warehouse 1",
    //     "location"=>"Jl. Raya",
    //     "phone_number"=>"08123456789",
    // );
    // http_response_code(200);

    // //Pengecekan data warehouse(fetch)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Warehouse fetched successfully",
    //     "id_warehouse"=>"1",
    //     "name"=>"Warehouse 1",
    //     "location"=>"Jl. Raya",
    //     "phone_number"=>"08123456789",
    // );
    // http_response_code(200);

    // //Pengecekan data warehouse(fetch) not found
    // $response["status"] = "Not Found";
    // $response["data"] = array(
    //     "message"=>"Warehouse not found",
    // );
    // http_response_code(404);


    // //Edit data warehouse
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Warehouse updated successfully",
    //     "new_data"=>[
    //         "name"=>"Warehouse satu",
    //         "location"=>"Jl. Raya",
    //         "phone_number"=>"08123456789"
    //     ]
    // );
    // http_response_code(200);

    // //Add items/ingredients ke warehouse
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Items added successfully",
    //     "id_warehouse"=>"1",
    //     "id_item"=>"1",
    //     "minimum_item_quantity"=>"20",
    //     "quantity"=>"100"
    // );
    // http_response_code(200);

    // //Edit items pada warehouse
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Items updated successfully",
    //     "id_ingredient"=>"1",
    //     "ingredient_quantity"=>"4"
    // );
    // http_response_code(200);

    // //Fetch ingredients pada warehouse/fetch warehouse detail
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Ingredients fetched successfully",
    //     "id_warehouse"=>"1",
    //     "name"=>"Warehouse 1",
    //     "location"=>"Jl. Raya",
    //     "phone_number"=>"08123456789",
    //     "ingredients"=>[
    //         array(
    //             "id_warehouse"=> "1",
    //             "id_ingredient"=> "1",
    //             "minimum_item_quantity"=> "2",
    //             "ingredient_quantity"=> "5"
    //         ),
    //         array(
    //             "id_warehouse"=> "1",
    //             "id_ingredient"=> "2",
    //             "minimum_item_quantity"=> "300",
    //             "ingredient_quantity"=> "500"
    //         )
    //     ]
    // );
    // http_response_code(200);

    // //Fetch ingredients pada warehouse/fetch warehouse detail not found
    // $response["status"] = "Not Found";
    // $response["data"] = array(
    //     "message"=>"Warehouse not found",
    // );
    // http_response_code(404);

    // //Entry Data Purchase Order
    // $response["status"] = "success";
    // $response["data"] = array(
    //         "message"=>"Purchase Order created successfully",
    //         "id_warehouse"=>"1",
    //         "id_item"=>"1",
    //         "demand"=>"10",
    //         "reserve"=>"5",
    //         "done"=>"0",
    //         "status"=>"shipping"
    //     );
    // http_response_code(200);

    // //Update quantity stock (reserve)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Stock (reserve) updated successfully",
    //     "id_purchase_order"=>"1",
    //     "reserve"=>"7",
    // );
    // http_response_code(200);

    // //Update quantity stock (done)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Stock (done) updated successfully",
    //     "id_purchase_order"=>"1",
    //     "done"=>"5",
    // );
    // http_response_code(200);

    // //Update quantity stock (status)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Stock (status) updated successfully",
    //     "id_purchase_order"=>"1",
    //     "status"=>"done",
    // );
    // http_response_code(200);

    // //Fetch data purchase order
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Purchase Order fetched successfully",
    //     "id_purchase_order"=>"1",
    //     "id_warehouse"=>"1",
    //     "id_item"=>"1",
    //     "demand"=>"10",
    //     "reserve"=>"7",
    //     "done"=>"5",
    //     "status"=>"done"
    // );
    // http_response_code(200);

    // //Fetch data purchase order not found
    // $response["status"] = "Not Found";
    // $response["data"] = array(
    //     "message"=>"Purchase Order not found",
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