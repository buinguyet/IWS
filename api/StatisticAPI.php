<?php

//Api.php
class API {

    private $connect = '';

    function __construct() {
        $this->database_connection();
    }

    function database_connection() {
        $this->connect = new PDO("mysql:host=localhost;dbname=vietnamtracking", "root", "");
    }

    function fetch_all() {
        $query = "SELECT * FROM vietnam ORDER BY cases DESC";
        $statement = $this->connect->prepare($query);
        if ($statement->execute()) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function insert() {
        if (isset($_POST['name'])) {
            $form_data = array(
                ':name' => $_POST['name'],
                ':cases' => $_POST['cases'],
                ':active' => $_POST['active'],
                ':deaths' => $_POST['deaths'],
                ':recovered' => $_POST['recovered']
            );
            $query = "
			INSERT INTO vietnam 
			(name, cases, active, deaths, recovered) VALUES 
			(:name, :cases, :active, :deaths, :recovered)
			";
            $statement = $this->connect->prepare($query);
            if ($statement->execute($form_data)) {
                $data[] = array(
                    'success' => '1'
                );
            } else {
                $data[] = array(
                    'success' => '0'
                );
            }
        } else {
            $data[] = array(
                'success' => '0'
            );
        }
        return $data;
    }

    function fetch_single($id) {
        $query = "SELECT * FROM vietnam WHERE id='" . $id . "'";
        $statement = $this->connect->prepare($query);
        if ($statement->execute()) {
            foreach ($statement->fetchAll() as $row) {
                $data['name'] = $row['name'];
                $data['cases'] = $row['cases'];
                $data['active'] = $row['active'];
                $data['deaths'] = $row['deaths'];
                $data['recovered'] = $row['recovered'];
            }
            return $data;
        }
    }

    function update() {
        if (isset($_POST['name'])) {
            $form_data = array(
                ':name' => $_POST['name'],
                ':cases' => $_POST['cases'],
                ':active' => $_POST['active'],
                ':deaths' => $_POST['deaths'],
                ':recovered' => $_POST['recovered'],
                ':id' => $_POST['id']
            );
            $query = "
			UPDATE vietnam 
			SET name = :name, cases = :cases, active = :active, deaths = :deaths, recovered = :recovered 
			WHERE id = :id
			";
            $statement = $this->connect->prepare($query);
            if ($statement->execute($form_data)) {
                $data[] = array(
                    'success' => '1'
                );
            } else {
                $data[] = array(
                    'success' => '0'
                );
            }
        } else {
            $data[] = array(
                'success' => '0'
            );
        }
        return $data;
    }

    function delete($id) {
        $query = "DELETE FROM vietnam WHERE id = '" . $id . "'";
        $statement = $this->connect->prepare($query);
        if ($statement->execute()) {
            $data[] = array(
                'success' => '1'
            );
        } else {
            $data[] = array(
                'success' => '0'
            );
        }
        return $data;
    }

}

?>