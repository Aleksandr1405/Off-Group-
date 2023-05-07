<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}

require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/style.css"> 
    <title>Orders</title>
</head>
<body>

<?php
      
    $conn = mysqli_connect('localhost','root','root','TEST_DB');
    if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
    }

    $user_id = filter_var(trim($_SESSION['user']['id']));

    $sql = "SELECT * FROM `oders_info` WHERE `user_id` = '$user_id'";

    if($result = mysqli_query($conn, $sql)) 
    {
        echo "<table><tr><th>ID</th><th>DESCRIPTION</th><th>CONTACT INFO</th><th>PRICE</th></tr>";
        foreach($result as $row) 
        {
            echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["contact_info"] . "</td>";
                echo "<td>" . $row["price"] . " $</td>";
                $sum += $row["price"];
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo " Total order prise: " . $sum . " $";
        echo "<br>";
        echo "Paid: 0 ";

        mysqli_free_result($result);
    } 
        else
    {
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);  
?> 

    <div class="container">
        <form action="/vendor/ordersCheck.php" method="post">
            <div class="mb-3">
                    <h3>Add oder</h3>
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
                <label for="exampleInputEmail1" class="form-label">Contact-info</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contact_info">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
            </div>
                <button type="submit" class="btn btn-success">Add</button>
        </form>

        <form action="/vendor/deleteOders.php" method="post">
            <div class="mb-3">
                <h3>Delete oder</h3>
                <label for="exampleInputEmail1" class="form-label">ID</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id">
            </div>
                <button type="submit" class="btn btn-success">Delete</button>
        </form>
    </div>   
</body>
</html>