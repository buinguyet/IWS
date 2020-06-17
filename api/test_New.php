<?php

include('NewAPI.php');

$api_objectNew = new NewsAPI();

if ($_GET["action"] == 'fetch_all_news') {
    $data = $api_objectNew->fetch_all_news();
}

if ($_GET["action"] == 'insert_new') {
    $data = $api_objectNew->insert_new();
}

if ($_GET["action"] == 'fetch_single_new') {
    $data = $api_objectNew->fetch_single_new($_GET["id"]);
}

if ($_GET["action"] == 'update_new') {
    $data = $api_objectNew->update_new();
}

if ($_GET["action"] == 'delete_new') {
    $data = $api_objectNew->delete_new($_GET["id"]);
}
echo json_encode($data);

