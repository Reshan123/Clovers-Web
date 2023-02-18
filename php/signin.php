<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <style>
        .msg{
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50% , -50%);
            font-size: 2em;
        }
    </style>
    <div class="nav-bar">
        <div class="items">
            <div><a href="signin.php">Sign In</a></div>
            <div><a href="login.php">Log In</a></div>
            <div><a href="#">Contact</a></div>
            <div><a href="../index.html">Home</a></div>
        </div>
    </div>
    
    <p class="login-text">Sign In</p>
    <form action="signin.php" method="post">
        <input type="text" name="uname" id="username" placeholder="Username"> <br>
        <input type="password" name="pwd" id="pwd" placeholder="Password"> <br>
        <input type="submit" name ="submit" value="submit" class="button">
    </form>
    <div class="msg">
    <?php
        include 'sql_connect.php';

        $username = "";
        $pwd = "";

        if (isset($_POST['submit'])) {
            $username = $_POST["uname"];
            $pwd = $_POST["pwd"];
            
            $sql = "INSERT INTO login(name , pwd) VALUES ('$username' , '$pwd')";

            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        mysqli_close($conn);
    ?>
    </div>
        
</body>
</html>

