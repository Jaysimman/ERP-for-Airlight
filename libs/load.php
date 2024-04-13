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

function submitform($servername,$username,$password,$dbname){
    $servername = "localhost";
    $username = "jaysimman";
    $password = "12321";
    $dbname= "Admin";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
}
