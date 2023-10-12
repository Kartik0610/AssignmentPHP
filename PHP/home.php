
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <style>
        body {
            background-image: url('anime.jpg'); /* Add your background image URL here */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            background-color: rgba(228, 233, 247, 0.5); /* 50% opacity (0.5) background color */
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .nav {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 40px;
            height: auto;
        }

        .main {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 60px;
        }

        .main-box {
            width: 70%;
        }

        .main-box .top {
            display: flex;
            flex-direction: column;
        }

        .result-box {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .result-box h3 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .record {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .record .label {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: none; /* Remove table borders */
            padding: 5px 10px;
            text-align: left;
            color: white; /* Change text color to white */
            font-weight: bold; /* Make text bold */
        }

        th {
            background-color: transparent; /* Make table headers transparent */
        }
    </style>
    <title>Home</title>
</head>
<body>
    <div class="nav">
    <?php
$logoImagePath = "logo.png"; // Set the path to your logo image here
?>

<div class="logo">
    <img src="<?php echo $logoImagePath; ?>" style="height:100px; width:110px" alt="Logo">
</div>

    </div>

    <main>
        <div class="main-box top">
<?php

include("php/config.php");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
 
// Taking all 2 values from the form data(input)
$Username= $_POST['Username'];
$StudentID = $_POST['StudentID'];
$Course= $_POST['Course'];
$Age = $_POST['Age'];
 
// Performing insert query execution','$
// here our table name is college
$sql = "INSERT INTO users(StudentId,Username,Course,Age) VALUES ('$StudentID', '$Username', '$Course', '$Age')";
 
if (mysqli_query($con, $sql)) {

    // Display all records in the 'users' table
    $selectQuery = "SELECT * FROM users";
    $result = mysqli_query($con, $selectQuery);

    if ($result) {
        echo "<h3>All Records in the 'users' table:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Username</th><th>Student ID</th><th>Course</th><th>Age</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Username'] . "</td>";
            echo "<td>" . $row['StudentID'] . "</td>";
            echo "<td>" . $row['Course'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Error fetching records: " . mysqli_error($con);
    }     
}


// Close connection
mysqli_close($con);
?>

          
        </div>
    </main>
</body>
</html>
