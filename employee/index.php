<?php
    $response = array();

    // // //Pengecekan ketersediaan akun pegawai(fetch)
    // $response["status"] = "success";
    // $response["message"] = "Employee fetched successfully";
    // $response["data"] = array(
    //     "id_employee"=>"1",
    //     "name"=>"han",
    //     "address"=>"alamat han",
    //     "phone_number"=>"08123",
    //     "email_address"=>"han@han.com",
    // );
    // http_response_code(200);

    // // //Pengecekan ketersediaan akun pegawai(fetch) not found
    // $response["status"] = "Not Found";
    // $response["message"] = "Employee not found";
    // http_response_code(404);

    // // //Pengecekan ketersediaan data tipe pegawai(fetch)
    // $response["status"] = "success";
    // $response["message"] = "Employee type fetched successfully";
    // $response["data"] = array(
    //     "id_employee_type"=>"1",
    //     "name"=>"Manager",
    // );
    // http_response_code(200);

    // // //Pengecekan ketersediaan data tipe pegawai(fetch) not found
    // $response["status"] = "Not Found";
    // $response["message"] = "Employee type not found";
    
    // http_response_code(404);


    // // //login employee
    // $response["status"] = "success";
    // $response["message"] = "Employee login successfully";
    // $response["data"]= array(
    //     "id_employee"=> "1",
    //     "email_address"=> "han@han.com",
    //     "name"=> "han",
    //     "id_employee_type"=> "1"
    // );
    // http_response_code(200);

    // // //edit employee
    // $response["status"] = "success";
    // $response["message"] = "Employee updated successfully";
    // $response["data"]= array(
    //     "id_employee"=> "1",
    //     "new_updated_data"=> array(
    //         "email"=> "han@han.com",
    //         "name"=> "handrian",
    //         "address"=> "alamat han 2",
    //         "phone_number"=> "081234",
    //         "password"=> "han123"
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