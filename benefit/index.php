<?php
    $response = array();

    // //Entry data benefit
    // $response["status"] = "success";
    // $response["data"]=array(
    //     "message"=>"Benefit created successfully",
    //     "name"=>"Benefit 1",
    //     "description"=>"all product",
    //     "point_required"=>"100",
    //     "discount"=>"10"
    // );
    // http_response_code(200);

    // // Pengecekan ketersediaan data benefit disc=10%
    // $response["status"] = "success";
    // $response["data"]=array(
    //     "message"=>"Benefit fetched successfully",
    //     "benefits"=>[
    //         array(
    //             "name"=>"Benefit 1",
    //             "description"=>"all product",
    //             "point_required"=>"100",
    //             "discount"=>"10"
    //         ),
    //         array(
    //             "name"=>"Benefit 3",
    //             "description"=>"tea",
    //             "point_required"=>"50",
    //             "discount"=>"10"
    //         )
    //     ]
    // );
    // http_response_code(200);

    // // Pengecekan ketersediaan data benefit not found
    // $response["status"] = "Not Found";
    // $response["data"]=array(
    //     "message"=>"Benefit not found",
    // );
    // http_response_code(404);

    // //Edit data benefit
    // $response["status"] = "success";
    // $response["data"]=array(
    //     "message"=>"Benefit updated successfully",
    //     "id_benefit"=>"1",
    //     "new_data"=>array(
    //         "name"=>"Benefit 1",
    //         "description"=>"all product",
    //         "point_required"=>"150",
    //         "discount"=>"20"
    //     )
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