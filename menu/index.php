<?php
    $response = array();

    //Entry data menu
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Menu created successfully",
    //     "name"=>"Boba Tea",
    //     "description"=>"ini enak sekali",
    //     "price "=>"20000"
    // );
    // http_response_code(200);


    // //Pengecekan ketersediaan data menu
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Menu fetched successfully",
    //     "id_menu"=>"1",
    //     "data"=>array(
    //         "name"=>"Boba Tea",
    //         "description"=>"ini enak sekali",
    //         "price "=>"20000"
    //     )
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan data menu not found
    // $response["status"] = "Not Found";
    // $response["data"] = array(
    //     "message"=>"Menu not found",
    // );
    // http_response_code(404);

    // //Entry data recipe detail
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Recipe detail created successfully",
    //     "id_recipe"=>"1",
    //     "id_menu"=>"1",
    //     "quantity"=>"3"
    // );
    // http_response_code(200);

    // // Edit recipe
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Recipe updated successfully",
    //     "menu_id"=>"1",
    //     "name"=>"Boba Tea",
    //     "new_detail"=>[
    //         array(
    //             "id_recipe"=>"1",
    //             "id_ingredient"=>"1",
    //             "quantity"=>"200"
    //         ),
    //         array(
    //             "id_recipe"=>"1",
    //             "id_ingredient"=>"2",
    //             "quantity"=>"1"
    //         ),
    //         array(
    //             "id_recipe"=>"1",
    //             "id_ingredient"=>"5",
    //             "quantity"=>"300"
    //         ),
    //         array(
    //             "id_recipe"=> "1",
    //             "id_ingredient"=> "6",
    //             "quantity"=> "500"
    //         )
                
            
    //     ]
    // );
    // http_response_code(200);

    // //Fetch data menu detail
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Detail Menu fetched successfully",
    //     "id_menu"=>"1",
    //     "detail"=>[
    //         array(
    //             "id_recipe"=>"1",
    //             "id_ingredient"=>"1",
    //             "quantity"=>"200"
    //         ),
    //         array(
    //             "id_recipe"=>"1",
    //             "id_ingredient"=>"2",
    //             "quantity"=>"1"
    //         ),
    //         array(
    //             "id_recipe"=>"1",
    //             "id_ingredient"=>"5",
    //             "quantity"=>"300"
    //         ),
    //         array(
    //             "id_recipe"=> "1",
    //             "id_ingredient"=> "6",
    //             "quantity"=> "500"
    //         )
                
            
    //     ]
    // );
    // http_response_code(200);

    // //Fetch data menu detail not found
    // $response["status"] = "Not Found";
    // $response["data"] = array(
    //     "message"=>"Menu detail not found",
    // );
    // http_response_code(404);

    

    // //Fetch data menu
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Menu fetched successfully",
    //     "menu"=>[
    //         array(
    //             "id"=>"1",
    //             "name"=>"Boba Tea",
    //             "description"=>"ini enak sekali",
    //             "price "=>"20000"
    //         ),
    //         array(
    //             "id"=>"2",
    //             "name"=>"Jelly",
    //             "description"=>"ini lembut sekali",
    //             "price "=>"5000"
    //         ),
    //         array(
    //             "id"=>"3",
    //             "name"=>"Coffee",
    //             "description"=>"ini nendang sekali",
    //             "price "=>"25000"
    //         ),
    //     ]
    // );
    // http_response_code(200);
    


    
    header('Content-Type: application/json');
    // STATUS CODE
    // 200 -> success
    // 201 -> success created
    // 400 -> bad request 
    // 401 -> unauthorized
    // 404 -> not found
    
    echo json_encode($response);
?>