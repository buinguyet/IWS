<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();
//fetch.php
$api_url = "http://localhost/VietnamCoronaStatistic/api/test_New.php?action=fetch_all_news";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';
if (count($result) > 0) {
    foreach ($result as $row) {


        if ($_SESSION['username'] == TRUE) {
            $output .= ' <br>
            <div class="card mb-4">
                <img class="card-img-top" src="../public/' . $row->image . '" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">' . $row->title . '</h2>
                    <p class="card-text">' . $row->brief . '</p>
           <a href="single_new.php?id=' . $row->id . '" class="btn btn-primary">Read More &rarr;</a>
            <td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id="' . $row->id . '">Edit</button></td>
            <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="' . $row->id . '">Delete</button></td>
                </div>
                <div class="card-footer text-muted">
                    Posted on ' . $row->date . '
                </div>
            </div>
        ';
        } else {
            $output .= ' <br>
            <div class="card mb-4">
                <img class="card-img-top" src="../public/' . $row->image . '" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">' . $row->title . '</h2>
                    <p class="card-text">' . $row->brief . '</p>
                    <a href="single_new.php?id=' . $row->id . '" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on ' . $row->date . '
                </div>
            </div>
        ';
        }
    }
} else {
    $output .= '
    <tr>
        <td colspan="4" align="center">No Data Found</td>
    </tr>
    ';
}

echo $output;
?>