<?php

//action.php

if (isset($_POST["action"])) {
//    Statistic
    if ($_POST["action"] == 'insert') {
        $form_data = array(
            'name' => $_POST['name'],
            'cases' => $_POST['cases'],
            'active' => $_POST['active'],
            'deaths' => $_POST['deaths'],
            'recovered' => $_POST['recovered']
        );
        $api_url = "http://localhost/VietnamCoronaStatistic/api/test_api.php?action=insert";  //change this url as per your folder path for api folder
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        $result = json_decode($response, true);
        foreach ($result as $keys => $values) {
            if ($result[$keys]['success'] == '1') {
                echo 'insert';
            } else {
                echo 'error';
            }
        }
    }

    if ($_POST["action"] == 'fetch_single') {
        $id = $_POST["id"];
        $api_url = "http://localhost/VietnamCoronaStatistic/api/test_api.php?action=fetch_single&id=" . $id . "";  //change this url as per your folder path for api folder
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        echo $response;
    }
    if ($_POST["action"] == 'update') {
        $form_data = array(
            'name' => $_POST['name'],
            'cases' => $_POST['cases'],
            'active' => $_POST['active'],
            'deaths' => $_POST['deaths'],
            'recovered' => $_POST['recovered'],
            'id' => $_POST['hidden_id']
        );
        $api_url = "http://localhost/VietnamCoronaStatistic/api/test_api.php?action=update";  //change this url as per your folder path for api folder
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        $result = json_decode($response, true);
        foreach ($result as $keys => $values) {
            if ($result[$keys]['success'] == '1') {
                echo 'update';
            } else {
                echo 'error';
            }
        }
    }
    if ($_POST["action"] == 'delete') {
        $id = $_POST['id'];
        $api_url = "http://localhost/VietnamCoronaStatistic/api/test_api.php?action=delete&id=" . $id . ""; //change this url as per your folder path for api folder
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        echo $response;
    }

//    News
    if ($_POST["action"] == 'insert_new') {
        $form_data = array(
            'image' => $_POST['image'],
            'title' => $_POST['title'],
            'brief' => $_POST['brief'],
            'descr' => $_POST['descr']
        );
        $api_url = "http://localhost/VietnamCoronaStatistic/api/test_New.php?action=insert_new";  //change this url as per your folder path for api folder
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        $result = json_decode($response, true);
        foreach ($result as $keys => $values) {
            if ($result[$keys]['success'] == '1') {
                echo 'insert';
            } else {
                echo 'error';
            }
        }
    }

    if ($_POST["action"] == 'fetch_single_new') {
        $id = $_POST["id"];
        $api_url = "http://localhost/VietnamCoronaStatistic/api/test_New.php?action=fetch_single_new&id=" . $id . "";  //change this url as per your folder path for api folder
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        echo $response;
    }
    if ($_POST["action"] == 'update_new') {
        $form_data = array(
            'image' => $_POST['image'],
            'title' => $_POST['title'],
            'brief' => $_POST['brief'],
            'descr' => $_POST['descr'],
            'id' => $_POST['hidden_id']
        );
        $api_url = "http://localhost/VietnamCoronaStatistic/api/test_New.php?action=update_new";  //change this url as per your folder path for api folder
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        $result = json_decode($response, true);
        foreach ($result as $keys => $values) {
            if ($result[$keys]['success'] == '1') {
                echo 'update';
            } else {
                echo 'error';
            }
        }
    }
    if ($_POST["action"] == 'delete_new') {
        $id = $_POST['id'];
        $api_url = "http://localhost/VietnamCoronaStatistic/api/test_New.php?action=delete_new&id=" . $id . ""; //change this url as per your folder path for api folder
        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        echo $response;
    }
}
?>