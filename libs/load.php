<?
    function load_template($name){
        include $_SERVER['DOCUMENT_ROOT']."/airlighterp/_templates/$name.php";
    }
    function validate_credentials($username,$password){
        if($username == "Admin" and $password == "Airlight@123"){
            return true;
        }else{
            return false;
        }
    }

    $servername = "localhost";
    $username = "jaysimman";
    $password = "12321";
    $dbname = "Admin";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql =  "INSERT INTO billrecords (`bill_date`, `bill_number`, `order_confirmation_date`, `order_confirmation_no`, `cust_po_date`, `offer_po_no`, `cust_code`, `cust_name`, `type_of_requirement`, `order_value`, `bill_value`, `material_dispatch_date`, `material_dispatch_details`, `pkd_empCode`, `pkd_empName`, `pay_empCode`, `pay_empName`)
    VALUES ('$billDate', '$billNo', '$orderConfDt', '$orderConfNo', '$custPoDt', '$offerPoNo', '$custCode', '$custName', '$typeOfReq', '$orderValue', '$billValue', '$mtrlDsptchDt', '$mtrlDsptchDetails', '$packEmpCode', '$pckEmpName', '$payEmpCode', '$payEmpName')";
   
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
