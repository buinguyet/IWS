
<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
//fetch_single.php
$id = $_GET["id"];
$api_url = "http://localhost/VietnamCoronaStatistic/api/test_New.php?action=fetch_single_new&id=$id";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);
?>
<?php include('header.php'); ?>

<div class="main-body-content w-100 ets-pt">
    <div class="container">
        <div class="well" style="background-color: #eef4fb;">

            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8" id="news">
                    <h1 class="mt-4"><?php echo $result->title ?></h1>
                    <hr>
                    <p>Posted on <?php echo $result->date ?></p>
                    <hr>
                    <img class="img-fluid rounded" src="../public/<?php echo $result->image ?>" alt="">
                    <hr>
                    <p><?php echo $result->descr ?></p>
                    <hr>
                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">
                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header" style="text-align: center;">How to protect yourself!</h5>
                        <div class="card-body">
                            <ol>
                                <li><span>Wash your hands frequently</span></li>
                                <hr>
                                <li><span>Maintain social distancing</span></li>
                                <hr>
                                <li><span>Avoid touching eyes, nose and mouth</span></li>
                                <hr>
                                <li><span>Practice respiratory hygiene</span></li>
                                <hr>
                                <li><span>If you have fever, cough and difficulty
                                        breathing, seek medical care early</span></li>
                                <hr>
                                <li><span>Stay informed and follow advice given by
                                        your healthcare provider</span></li>
                                <hr>

                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
    </div>
</div>
</body>
</html>
