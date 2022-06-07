<?php
    $response = array();

    // //registrasi akun member
    // $response["status"] = "success";
    // $response["message"] = "Account created successfully";
    // $response["data"] = array(
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
    // $response["message"] = "Member fetched successfully";
    // $response["data"] = array(
    //     "name"=>"Han",
    //     "address"=>"Jalan Raya",
    //     "phone_number"=>"08123456789",
    //     "email_address"=>"han@han.com",
    //     "point"=>"0",
    // );
    // http_response_code(200);

    // //Pengecekan ketersediaan akun Member not found
    // $response["status"] = "Not found";
    // $response["message"] = "Member not found";
   
    // http_response_code(404);
    

    // // Login akun Member
    // $response["status"] = "success";
    // $response["message"] = "Member login successfully";
    // $response["data"] = array(
    //     "id_membership "=> "1",
    //     "email_address"=> "han@han.com",
    //     "name"=> "han",
    // );
    // http_response_code(200);

    // // Login akun Member false credentials
    // $response["status"] = "Unauthorized";
    // $response["message"] = "Invalid credentials";
    // http_response_code(401);

    // Edit data Member
    // $response["status"] = "success";

    // //Edit data Member
    // $response["status"] = "success";
    // $response["message"] = "Member updated successfully";
    // $response["data"] = array(
    //     "id_membership"=>"1",
    //     "new_updated_data"=>
    //         array(
    //             "name"=>"Handrian",
    //             "address"=>"Jalan Raya",
    //             "phone_number"=>"081234",
    //             "email_address"=>"han@han.com",
    //             "point"=>"0",
    //             "password"=>"han123"
    //         )
    //     
    // );
    // http_response_code(200);

    // //Forgot or change password
    // $response["status"] = "success";
    // $response["message"] = "Password reset/change successfully";
    // $response["data"] = array(
    //     "email"=> "han@han.com"
    // );
    // http_response_code(200);

    // //Penambahan poin
    // $response["status"] = "success";
    // $response["message"] = "Point added successfully";
    // $response["data"] = array(
    //     "id_membership"=> "1",
    //     "new_point"=> "100"
    // );
    // http_response_code(200);

    // //pengurangan poin
    // $response["status"] = "success";
    // $response["message"] = "Point subtracted successfully";
    // $response["data"] = array(
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