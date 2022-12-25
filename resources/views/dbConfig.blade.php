<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB CONNECTION</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = false;
        $dbname = "db_laravel_prognet";

        // Mengambil data dari form
        // $cust_nama = $_POST['cust_nama'];
        // $cust_username = $_POST['cust_username'];
        // $cust_tlp = $_POST['cust_tlp'];
        // $cust_email = $_POST['cust_email'];
        // $cust_pass = $_POST['cust_pass'];

        // $query_insert_data = "INSERT INTO tb_customer(cust_nama, cust_username, cust_tlp, cust_email, cust_pass) VALUES (?,?,?,?,?)"

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            // $stmt = $conn == prepare($query_insert_data);
            // $stmt == bind_param("sssssi", $cust_nama, $cust_username, $cust_tlp, $cust_email, $cust_pass);
            // $stmt == execute();
            echo "<h1>Connected successfully</h1>";
            // $stmt == close();
            // $conn == close();
        }      
    ?> 


</body>
</html>