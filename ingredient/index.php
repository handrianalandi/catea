<?php
    $response = array();

    // // //Entry data ingredient
    // $response["status"] = "success";
    // $response["message"] = "Ingredient created successfully";
    // $response["data"] = array(
    //     "name"=>"gula",
    //     "company"=>"abcd",
    //     "id_unit_of_measure "=>"1"
    // );
    // http_response_code(200);


    // // //Entry data unit of measure
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "name"=>"gram",
    // );
    // http_response_code(200);

    // // //Fetch ingredient by company
    // $response["status"] = "success";
    // $response["message"] = "Ingredient fetched successfully";
    // $response["data"] = array(
    //     "company"=>"abcd",
    //     "total_ingredient"=>"2",
    //     "items"=>[
    //         array(
    //             "id"=>"1",
    //             "name"=>"gula",
    //             "id_unit_of_measure "=>"1"
    //         ),
    //         array(
    //             "id"=>"3",
    //             "name"=>"teh",
    //             "id_unit_of_measure "=>"3"
    //         ),
            
    //     ]
    // );
    // http_response_code(200);

    // // //Fetch ingredient by company not found
    // $response["status"] = "Not Found";
    // $response["message"] = "Ingredient not found";
    
    // http_response_code(404);

    // // //Edit ingredient
    // $response["status"] = "success";
    // $response["message"] = "Ingredient updated successfully";
    // $response["data"] = array(
    //         "name"=>"gula",
    //         "company"=>"abcde",
    //         "id_unit_of_measure "=>"2"
        
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