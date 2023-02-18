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

    <p class="login-text">Login</p>
    <form action="login.php" method="post">
        <input type="text" name="uname" id="username" placeholder="Username"><br>
        <input type="password" name="pwd" id="pwd" placeholder="Password"><br>
        <input type="submit" value="Submit" class="button" name="submit">
    </form>
    <div class="msg">
    <?php
        include 'sql_connect.php';


        $username = "";
        $pwd = "";


        if (isset($_POST['submit'])) {
            $username = $_POST["uname"];
            $pwd = $_POST["pwd"];

            $sql = "SELECT name, pwd FROM login";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    if ($username == $row['name'] && $pwd == $row['pwd']){
                        echo "Accepted";
                    } else {
                        echo "no";
                    }
                }
            }
        }
        mysqli_close($conn);
    ?>
    </div>
    
</body>
</html>

