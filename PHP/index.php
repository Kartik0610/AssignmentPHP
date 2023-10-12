<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php

            include("php/config.php");
            if(isset($_POST['submit'])){
                $res = mysqli_query($con,"SELECT * FROM users");
                $row = mysqli_fetch_assoc($res);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Student ID'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['Course'] = $row['Course'];
            }
        }else{
            echo "<div class='message'>
              <p>Wrong Username or Password</p>
               </div> <br>";
           echo "<a href='index.php'><button class='btn'>Go Back</button>";
 
        }
        if(isset($_SESSION['valid'])){
            header("Location: home.php");
        }
      else{
            ?>
            

            <header>Student Details</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="Student ID">Student ID</label>
                    <input type="number" name="Student ID" id="Student ID" required>
                </div>

                <div class="field input">
                    <label for="Course">Course</label>
                    <input type="text" name="Course" id="Course" required>
                    </div>

                <div class="field input">
                    <label for="Age">Age</label>
                    <input type="number" max="100" name="Age" id="Age" required>
                    </div>
            
                <div class="field ">
                        <button  class="btn "type="submit" ><a href="home.php" style="text-decoration: none; color: #ffffff;">Submit</a></button>
                </div>
                </form>

        </div>
        <?php } ?>
    </div>
    
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            /* Add your background image URL here */
            background-image: url('anime.jpg');
            background-size: cover; /* Adjust this as needed */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            background-color: rgba(228, 233, 0.5, 0.5);
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Student Details</header>
            <form method="post" action="home.php" >
                <div class="field input">
                    <label for="Un">Username</label>
                    <input type="text" name="Username" id="Username" required>
                </div>

                <div class="field input">
                    <label for="ID">Student ID</label>
                    <input type="number" name="StudentID" id="StudentID" required>
                </div>

                <div class="field input">
                    <label for="Course">Course</label>
                    <input type="text" name="Course" id="Course" required>
                </div>

                <div class="field input">
                    <label for="Age">Age</label>
                    <input type="number" max="100" name="Age" id="Age" required>
                </div>
            
                <div class="field">
                    <button class="btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

