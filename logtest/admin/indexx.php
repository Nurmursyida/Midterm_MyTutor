

<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script>alert('Session not available. Please login');</script>";
    echo "<script> window.location.replace('login.php')</script>";
}

include_once ("dbconnect.php");
$sqltutor = "SELECT * FROM subjects";
$stmt =$conn->prepare($sqltutor);
$stmt->execute();
$rows = $stmt ->fetchAll();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="menu.js" defer></script>

    <title>Welcome to SlumShop</title>
</head>

<body>
    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <a href="index.php" class="w3-bar-item w3-button">Dashboard</a>
        <a href="indexx.php" class="w3-bar-item w3-button">My TUTOR</a>
        <a href="#" class="w3-bar-item w3-button">Customer</a>
        <a href="#" class="w3-bar-item w3-button">Orders</a>
        <a href="#" class="w3-bar-item w3-button">Reports</a>
        <a href="#" class="w3-bar-item w3-button">Logout</a>
    </div>

    <div class="w3-pink">
        <button class="w3-button w3-yellow w3-xlarge" onclick="w3_open()">☰</button>
        <div class="w3-container">
            <h3>My TUTOR</h3>
            

            </p>
        </div>
    </div>
    <div class="w3-bar w3-yellow">
        <a href="newtutor.php" class="w3-bar-item w3-button w3-right">New TUTOR</a>
    </div>

<div>
    <?php
    $i=0;
    echo "<table>
    <tr><th>No</th><th>Subject Name</th><th>Subject Description</th><th>Subject Session</th><th>Subject Rating</th></tr>";
         
    foreach ($rows as $tutor) {
       // `subject_id`,`subject_name`, `subject_description`, `subject_price`, `subject_sessions`, `subject_rating`) 
         $prid = $tutor ['subject_id'];
          $prname = $tutor ['subject_name'];
          $prdesc = $tutor ['subject_description'];
          $prprice=$tutor ['subject_price'];
         $prsessions = $tutor ['subject_sessions'];
          $prrating = $tutor ['subject_rating'];
          echo "<tr><td>$i</td><td>$prid</td><td>$prname</td><td>$prdesc</td><td>RM:$price</td><td>$pressions</td><td>$prrating</td></tr>";
    }
          echo "</table>";
    
    ?>
</div>

    <footer class="w3-footer w3-center w3-bottom w3-yellow">NUT</footer>

</body>

</html>