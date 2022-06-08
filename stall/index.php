<?php
    $response = array();


    // //Entry data stall
    // $response["status"] = "success";
    // $response["message"] = "Stall created successfully";
    // $response["data"] = array(
    //     "location"=>"Jl. Raya",
    // );
    // http_response_code(200);


    // //Pengecekan data stall
    // $response["status"] = "success";
    // $response["message"] = "Stall fetched successfully";
    // $response["data"] = array(
    //     "id_stall"=>"1",
    //     "location"=>"Jl. Raya",
    // );
    // http_response_code(200);

    // //Pengecekan data stall not found
    // $response["status"] = "Not Found";
    // $response["message"] = "Stall not found";
    // http_response_code(404);
    


    // //Edit data stall
    // $response["status"] = "success";
    // $response["message"] = "Stall updated successfully";
    // $response["data"] = array(
    //     "new_location"=>"Mall Surabaya"
    // );
    // http_response_code(200);

    // //Assign employee pada stall
    // $response["status"] = "success";
    // $response["message"] = "Employee assigned successfully";
    // $response["data"] = array(
    //     "id_employee_"=>"1",
    //     "id_stall"=>"1"
    // );
    // http_response_code(200);

    // //Edit employee pada stall
    // $response["status"] = "success";
    // $response["message"] = "Employee updated successfully";
    // $response["data"] = array(
    //     "new_data"=>[
    //         array(
    //             "id_stall"=>"1",
    //             "id_employee"=>"1"
    //         ),
    //         array(
    //             "id_stall"=>"1",
    //             "id_employee"=>"2"
    //         )
    //     ]
    // );
    // http_response_code(200);

    // //Add items/ingredients ke stall
    // $response["status"] = "success";
    // $response["message"] = "Items added successfully";
    // $response["data"] = array(
    //     "id_stall"=>"1",
    //     "id_ingredient"=>"1",
    //     "minimum_item_quantity"=>"20",
    //     "quantity"=>"200"
    // );
    // http_response_code(200);

    // //Edit items pada stall
    // $response["status"] = "success";
    // $response["message"] = "Items updated successfully";
    // $response["data"] = array(
    //     "id_ingredient"=>"1",
    //     "ingredient_quantity"=>"4"
    // );
    // http_response_code(200);

    // //Fetch employee pada stall
    // $response["status"] = "success";
    // $response["message"] = "Employee fetched successfully";
    // $response["data"] = array(
    //     "id_stall"=>"1",
    //     "employee"=>[
    //         array(
    //             "id_employee"=>"1",
    //             "name"=>"Han",
    //         ),
    //         array(
    //             "id_employee"=>"2",
    //             "name"=>"Solo",
    //         )
    //     ]
    // );
    // http_response_code(200);

    // //Fetch ingredients pada stall
    // $response["status"] = "success";
    // $response["message"] = "Ingredients fetched successfully";
    // $response["data"] = array(
    //     "id_stall"=>"1",
    //     "ingredients"=>[
    //         array(
    //             "id_ingredient"=> "1",
    //             "ingredient_name"=> "teh",
    //             "minimum_item_quantity"=> "2",
    //             "ingredient_quantity"=> "5"
    //         ),
    //         array(
    //             "id_ingredient"=> "2",
    //             "ingredient_name"=> "gula",
    //             "minimum_item_quantity"=> "300",
    //             "ingredient_quantity"=> "500"
    //         )
    //     ]
    // );
    // http_response_code(200);

    // //Fetch stall detail
    // $response["status"] = "success";
    // $response["message"] = "Stall detail fetched successfully";
    // $response["data"] = array(
    //     "id_stall"=>"1",
    //     "ingredients"=>[
    //         array(
    //             "id_stall"=> "1",
    //             "id_ingredient"=> "1",
    //             "minimum_item_quantity"=> "2",
    //             "ingredient_quantity"=> "5"
    //         ),
    //         array(
    //             "id_stall"=> "1",
    //             "id_ingredient"=> "2",
    //             "minimum_item_quantity"=> "300",
    //             "ingredient_quantity"=> "500"
    //         )
    //     ],
    //     "employee" => [
    //         array(
    //             "id_employee" => "1",
    //             "name" => "Han",
    //         ),
    //         array(
    //             "id_employee" => "2",
    //             "name" => "Solo",
    //         )
    //     ]
    // );


    
    header('Content-Type: application/json');
    // STATUS CODE
    // 200 -> success
    // 201 -> success created
    // 400 -> bad request 
    // 401 -> unauthorized
    // 404 -> not found
    
    echo json_encode($response);
?>