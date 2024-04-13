<?
 include "libs/load.php";
 
 submitform("","","","");

 //  echo "$billDate"."$billNo";
 $sql = "INSERT INTO billrecords (`bill_date`, `bill_number`, `order_confirmation_date`, `order_confirmation_no`, `cust_po_date`, `offer_po_no`, `cust_code`, `cust_name`, `type_of_requirement`, `order_value`, `bill_value`, `material_dispatch_date`, `material_dispatch_details`, `pkd_empCode`, `pkd_empName`, `pay_empCode`, `pay_empName`)
 VALUES ('$billDate', '$billNo', '$orderConfDt', '$orderConfNo', '$custPoDt', '$offerPoNo', '$custCode', '$custName', '$typeOfReq', '$orderValue', '$billValue', '$mtrlDsptchDt', '$mtrlDsptchDetails', '$packEmpCode', '$pckEmpName', '$payEmpCode', '$payEmpName')";

 if ($conn->query($sql) === TRUE) {
   echo "New Bill record created successfully";
   echo "Back to form";
 }else{
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();