<?php require_once "login/loginheader.php"; 
require_once "login/dbconf.php";
$dbconn = mysqli_connect( $host, $username, $password, $db_name );

function clean($str) {
    global $dbconn;
    $str = trim($str);
    $str = stripslashes($str);
    $str = htmlentities($str, ENT_QUOTES);
    $str = mysqli_real_escape_string($dbconn, $str);
    
    return $str;
}


if (!isset( $_SESSION['username'])) {
    $thisUser = clean ($_SESSION['username']);
}

if( isset( $_POST['html'])) {

    print "<script>alert('HI');</script>";
    
     $content = mysqli_real_escape_string($dbconn, $_POST['save-db']);
     $check =  mysqli_query($dbconn, "SELECT `id` FROM `tamplatess` WHERE `user_id` = ".$_SESSION['username']);
    var_dump($check);
     //  if (!empty($check)) {
    //     $sql1 = "UPDATE `members` SET `content` ='".$content."' WHERE `username` ='".$thisUser."' ";
    //  } else {
    //     $sql1 = "INSERT INTO `tamplatess` (`templatess`, `user_id`) VALUES (".$content.", ".$_SESSION['username'].");";
    //  }
    $query1 = mysqli_query( $dbconn, $sql1 );
}

?>


  

</script>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gramateria</title>
    <link rel="stylesheet" href="dist/grapesjs/grapes.min.css">
    <link rel="stylesheet" href="dist/gramateria/gram.min.css">

    <link rel="shortcut icon" href="favicon.ico" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="dist/grapesjs/grapes.min.js"></script>
    <script src="dist/grapesjs/plugins/grapesjs-plugin-export.min.js"></script>
</head>
<body>

    <?php  /*
        $sql2 =  "SELECT `templatess` FROM `templatess` WHERE `user_id` = '".$_SESSION['username']."'";
        $query2 = mysqli_query($dbconn, $sql2 );
        $row = mysqli_fetch_assoc($query2);
        echo $row['templatess'];*/
    
    
    
    ?>
<div id="gjs" style="height:0px; overflow:hidden;">
    
</div>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script> 
<script src="dist/gramateria/develop/gramateria.js"></script>
</body>
<!-- Gramateria, a free drag and drop website builder ( www.gramateria.com ) -->
</html>
