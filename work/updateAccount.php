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
    if (isset($_POST["updateAccount"])) {
        if (empty($_POST["username"]) || empty($_POST["oldpassword"]) || empty($_POST["newpassword"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $query1 = "SELECT * FROM admin WHERE username = :username AND password = :password";
            $statement1 = $connect->prepare($query1);
            $statement1->execute(
                    array(
                        'username' => $_POST["username"],
                        'password' => $_POST["oldpassword"]
                    )
            );
            $count1 = $statement1->rowCount();
            if ($count1 > 0) {
                $query = "UPDATE admin
              SET
                  username = :username, password = :password WHERE username = '" . $_SESSION['username'] . "' ";
                $statement = $connect->prepare($query);
                $statement->execute(
                        array(
                            'username' => $_POST["username"],
                            'password' => $_POST["newpassword"]
                        )
                );
                if ($statement) {
                    header("location:logout.php");
                }
            } else {
                $message = '<label>The old password is not correct!</label>';
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
            <h2 style="text-align: center;">Update Account</h2>
            <label>
                <p class="label-txt">ENTER USERNAME</p>
                <input type="text"
                       class="input" name="username"
                       value="<?php echo $_SESSION['username']; ?>" >
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label> <label>
                <p class="label-txt">ENTER OLD PASSWORD</p> 
                <input type="password"
                       class="input" name="oldpassword">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label> 
            <label>
                <p class="label-txt">ENTER NEW PASSWORD</p> 
                <input type="password"
                       class="input" name="newpassword">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label> 

            <input class="button2" type="submit" name="updateAccount" value="Update Account" /> <br>
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


