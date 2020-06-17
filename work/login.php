<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "vietnamtracking";
$message = "";
try {
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST["login"])) {
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $query = "SELECT * FROM admin WHERE username = :username AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                    array(
                        'username' => $_POST["username"],
                        'password' => $_POST["password"]
                    )
            );
            $count = $statement->rowCount();
            if ($count > 0) {
                $_SESSION["username"] = $_POST["username"];
                header("location:index.php");
            } else {
                $message = '<label>Invalid Username or Password</label>';
            }
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}
?>
<?php include('header.php'); ?>
<style>
    form {
        width: 60%;
        margin: 60px auto;
        background: #fcefe2;
        padding: 60px 120px 80px 120px;
        text-align: center;
        -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
        box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
    }

    label {
        display: block;
        position: relative;
        margin: 40px 0px;
    }
</style>
<div class="main-body-content w-100 ets-pt">
    <div class="container">
        <form method="post">
            <h2 style="text-align: center;">Login</h2>
            <label>
                <p class="label-txt">ENTER USERNAME</p>
                <input type="text"
                       class="input" name="username"
                       value="" >
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label> <label>
                <p class="label-txt">ENTER PASSWORD</p> 
                <input type="password"
                       class="input" name="password">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label> <input class="button2" type="submit" name="login" value="Login" /> <br>
            <?php
            if (isset($message)) {
                echo '<label class="text-danger">' . $message . '</label>';
            }
            ?> 
        </form>

    </div>
</div>
</body>
</html>
