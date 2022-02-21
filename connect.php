<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // variable 
        // POST/GET
    $usr = $_POST['username'];
    $pwd = $_POST['password'];

        // mysql connection
    $dbname = 'munal';
    $dbuser= 'root';
    $dbpwd='';
    $dbsrv='127.0.0.1';

        // extra 
    $cmd = "select * from practise where username = '".$usr."' and password = '".$pwd."'";

    
    // connecting to mysql
    $conn = new mysqli($dbsrv,$dbuser,$dbpwd,$dbname);

    if ( !$conn) {
        die("Connection error !!!");
    } else {
        echo "Connection success  to database :)";
    }

    $out = $conn -> query($cmd);
    $row = mysqli_fetch_array($out, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($out); 
    
    if ($count >= 1 ) {
        echo "<br> Welcome keshav... ";
    } else {
        echo "<br> Username and password mismatch !!! ";
    }


    ?>
</body>
</html>