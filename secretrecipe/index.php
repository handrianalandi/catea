<?php
    $response = array();

    // //Entry data menu(oleh: employee)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Secret Menu created successfully",
    //     "name"=>"Secret Boba Tea",
    //     "description"=>"Secret Boba Tea that explode",
    //     "id_employee"=>"1",
    //     "id_membership"=>"NULL",
    //     "id_stall"=>"1",
    //     "price "=>"20000",
    //     "status"=>"1"
    // );
    // http_response_code(200);

    // //Entry data menu(oleh: member)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Secret Menu created successfully",
    //     "name"=>"Secret Boba Coffee",
    //     "description"=>"Secret Boba Coffee that explode",
    //     "id_employee"=>"NULL",
    //     "id_membership"=>"1",
    //     "id_stall"=>"1",
    //     "price "=>"20000",
    //     "status"=>"1"
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan data menu(fetch)(by id_employee)(contoh)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Secret Menu fetched successfully",
    //     "name"=>"Secret Boba Tea",
    //     "description"=>"Secret Boba Tea that explode",
    //     "id_employee"=>"1",
    //     "id_membership"=>"NULL",
    //     "id_stall"=>"1",
    //     "price "=>"20000",
    //     "status"=>"1"
        
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan data menu(fetch)(by id_membership)(contoh)
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Secret Menu created successfully",
    //     "name"=>"Secret Boba Coffee",
    //     "description"=>"Secret Boba Coffee that explode",
    //     "id_employee"=>"NULL",
    //     "id_membership"=>"1",
    //     "id_stall"=>"1",
    //     "price "=>"20000",
    //     "status"=>"1"
        
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan data menu(fetch)(by id_membership)(contoh) not found
    // $response["status"] = "Not Found";
    // $response["data"] = array(
    //     "message"=>"Secret Menu not found",
    // );
    // http_response_code(404);


    // //Entry data secret recipe detail
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Item added successfully",
    //     "id_secret_recipe"=>"1",
    //     "id_ingredient"=>"2",
    //     "ingredient_quantity"=>"200"
    // );
    // http_response_code(200);

    // // Pengecekan ketersediaan secret data recipe detail
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Item added successfully",
    //     "id_secret_recipe"=>"1",
    //     "name"=>"Secret Boba Tea",
    //     "description"=>"Secret Boba Tea that explode",
    //     "id_employee"=>"1",
    //     "id_membership"=>"NULL",
    //     "id_stall"=>"1",
    //     "price "=>"20000",
    //     "status"=>"1",
    //     "ingredients"=>[
    //         array(
    //             "id_ingredient"=>"1",
    //             "ingredient_quantity"=>"200"
    //         ),
    //         array(
    //             "id_ingredient"=>"2",
    //             "ingredient_quantity"=>"1"
    //         ),
    //         array(
    //             "id_ingredient"=>"5",
    //             "ingredient_quantity"=>"300"
    //         )
    //     ]
    // );
    // http_response_code(200);

    // //Edit secret recipe
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Secret Recipe updated successfully",
    //     "name"=>"Secret Boba Tea",
    //     "description"=>"Secret Boba Tea that explode boom",
    //     "id_employee"=>"1",
    //     "id_membership"=>"NULL",
    //     "id_stall"=>"1",
    //     "price"=>"50000",
    //     "status"=>"1"
    // );
    // http_response_code(200);

    // //Edit secret recipe detail
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Secret Recipe detail updated successfully",
    //     "id_secret_recipe"=>"1",
    //     "id_ingredient"=>"2",
    //     "ingredient_quantity"=>"500"
    // );
    // http_response_code(200);

    // //Fetch data secret menu
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Secret Menu fetched successfully",
    //     "name"=>"Secret Boba Tea",
    //     "description"=>"Secret Boba Tea that explode",
    //     "id_employee"=>"1",
    //     "id_membership"=>"NULL",
    //     "id_stall"=>"1",
    //     "price "=>"20000",
    //     "status"=>"1"
    // );
    // http_response_code(200);

    // //Update approval status
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Secret Menu status updated successfully",
    //     "id_secret_recipe"=>"1",
    //     "status"=>"2"
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