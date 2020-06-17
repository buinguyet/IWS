<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();
//fetch.php
$api_url = "http://localhost/VietnamCoronaStatistic/api/test_api.php?action=fetch_all";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';
if (count($result) > 0) {
    foreach ($result as $row) {


        if ($_SESSION['username'] == TRUE) {
            $output .= '
        <tr>
            <td>' . $row->name . '</td>
            <td>' . $row->cases . '</td>
                        <td>' . $row->active . '</td>
                        <td>' . $row->deaths . '</td>
                        <td>' . $row->recovered . '</td>
           <td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id="' . $row->id . '">Edit</button></td>
            <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="' . $row->id . '">Delete</button></td>
             }
        </tr>
        ';
        } else {
            $output .= '
        <tr>
            <td>' . $row->name . '</td>
            <td>' . $row->cases . '</td>
                        <td>' . $row->active . '</td>
                        <td>' . $row->deaths . '</td>
                        <td>' . $row->recovered . '</td>
             
           
             }
        </tr>
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