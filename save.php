
<?php 

session_start();
ob_start();

include_once "login/globalcon.php";

$dbconnect = new Database;

//$dbconn = mysqli_connect($host, $username, $password, $db_name);

if(isset($_POST['html'])) {

    $html = $_POST['html'];
    $created = time();
    $user = $_SESSION['username'];

    $sql = "INSERT INTO `templatess` (`templatess`, `time_add`, `user_id`) VALUES (?, ?, ?)";

    if ($dbconnect->syntax($sql, [$html, $created, $user])) {
        echo 'done'; 
    }else{
        echo 'NOT FOUND'; 
    }
}

//$dbconnect->getTamplate($_SESSION['username']);