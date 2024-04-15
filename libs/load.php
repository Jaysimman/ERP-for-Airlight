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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $billDate = test_input($_POST["billDate"]);
      $billNo = test_input($_POST["billNo"]);
      $orderConfDt = test_input($_POST["orderConfDt"]);
      $orderConfNo = test_input($_POST["orderConfNo"]);
      $custPoDt = test_input($_POST["custPoDt"]);
      $offerPoNo = test_input($_POST["offerPoNo"]);
      $custPoDt = test_input($_POST["custPoDt"]);
      $custCode = test_input($_POST["custCode"]);
      $custName = test_input($_POST["custName"]);
      $typeOfReq = test_input($_POST["typeOfReq"]);
      $orderValue = test_input($_POST["orderValue"]);
      $billValue = test_input($_POST["billValue"]);
      $mtrlDsptchDt = test_input($_POST["mtrlDsptchDt"]);
      $mtrlDsptchDetails = test_input($_POST["mtrlDsptchDetails"]);
      $packEmpCode = test_input($_POST["packEmpCode"]);
      $pckEmpName = test_input($_POST["pckEmpName"]);
      $payEmpCode = test_input($_POST["payEmpCode"]);
      $payEmpName = test_input($_POST["payEmpName"]);
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  
    $servername = "localhost";
    $username = "jaysimman";
    $password = "12321";
    $dbname = "Admin";
    try{  
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
    }
   }catch(Exception $e){
    print($e);
   }
  $conn->close();
