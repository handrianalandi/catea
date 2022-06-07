<?php
    $response = array();

    // //registrasi akun member
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Member created successfully",
    //     "name"=>"Han",
    //     "address"=>"Jalan Raya",
    //     "phone_number"=>"08123456789",
    //     "email_address"=>"han@han.com",
    //     "point"=>"0",
    //     "password"=>"12345"
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan akun Member
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Member fetched successfully",
    //     "name"=>"Han",
    //     "address"=>"Jalan Raya",
    //     "phone_number"=>"08123456789",
    //     "email_address"=>"han@han.com",
    //     "point"=>"0",
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan akun Member not found
    // $response["status"] = "Not found";
    // $response["data"] = array(
    //     "message"=>"Member not found",
    // );
    // http_response_code(404);
    

    // // Login akun Member
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=> "Sucessfully login",
    //     "id_membership "=> "1",
    //     "email_address"=> "han@han.com",
    //     "name"=> "han",
    // );
    // http_response_code(200);

    // // Login akun Member false credentials
    // $response["status"] = "Unauthorized";
    // $response["data"] = array(
    //     "message"=> "Wrong credentials",
    // );
    // http_response_code(401);

    //Edit data Member
    // $response["status"] = "success";

    // //Edit data Member
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=>"Member updated successfully",
    //     "id_membership"=>"1",
    //     "new_updated_data"=>[
    //         array(
    //             "name"=>"Handrian",
    //             "address"=>"Jalan Raya",
    //             "phone_number"=>"081234",
    //             "email_address"=>"han@han.com",
    //             "point"=>"0",
    //             "password"=>"han123"
    //         )
    //     ]
    // );
    // http_response_code(200);

    // //Forgot or change password
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=> "Password reset successfully",
    //     "email"=> "han@han.com"
    // );
    // http_response_code(200);

    // //Penambahan poin
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=> "Point updated successfully",
    //     "id_membership"=> "1",
    //     "new_point"=> "100"
    // );
    // http_response_code(200);

    // //pengurangan poin
    // $response["status"] = "success";
    // $response["data"] = array(
    //     "message"=> "Point updated successfully",
    //     "id_membership"=> "1",
    //     "new_point"=> "50"
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