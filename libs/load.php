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