<?php require "config.php"; include 'libs/load.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="jaysimman" />
        <title>Tables - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
            <?php
            //  include "sidebar.php"
             ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <!-- <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Billing Reports
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Bill Details</th>
                                            <th>Order Confirmation</th>
                                            <th>PO Details</th>
                                            <th>Customer Detail</th>
                                            <th>Service Type</th>
                                            <th>Value</th>
                                            <th>Dispatch Detail</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Bill Details</th>
                                            <th>Order Confirmation</th>
                                            <th>PO Details</th>
                                            <th>Customer Detail</th>
                                            <th>Service Type</th>
                                            <th>Value</th>
                                            <th>Dispatch Detail</th>
                                            <th>Options</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    // SQL query to fetch data
                                    $sql = "SELECT * FROM billrecords";
                                    $result = $conn->query($sql);

                                    // Check if there are any results
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr><td> Date: " . $row["bill_date"] . "<br> No: ". $row['bill_number'] . "</td><td> Date: " . $row["order_confirmation_date"] . "<br> No. ".$row['order_confirmation_no']. "</td><td> Date: " . $row["cust_po_date"] . "<br> Offer PO No: ".$row['offer_po_no']. "</td><td>" . $row["cust_code"] . " - ".$row['cust_name'] . "</td><td>" . $row["type_of_requirement"] . "</td><td> Order Rs. " . $row["order_value"] . "<br> Bill Rs. ".$row['bill_value']. "</td><td> Date : " . $row["material_dispatch_date"] . "<br> ".$row['material_dispatch_details']. "</td><td> <button>View</button> <button>Edit</button></td></tr>";
                                        }
                                    }
                                    // Close connection
                                    $conn->close();
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
                //  include "footer.php";
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
