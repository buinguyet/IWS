<?php

//Api.php
class NewsAPI {

    private $connect = '';

    function __construct() {
        $this->database_connection();
    }

    function database_connection() {
        $this->connect = new PDO("mysql:host=localhost;dbname=vietnamtracking", "root", "");
    }

    function fetch_all_news() {
        $query = "SELECT * FROM news ORDER BY date DESC";
        $statement = $this->connect->prepare($query);
        if ($statement->execute()) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function insert_new() {
        if (isset($_POST['title'])) {
            $form_data = array(
                ':image' => $_POST['image'],
                ':title' => $_POST['title'],
                ':brief' => $_POST['brief'],
                ':descr' => $_POST['descr'],
                ':date' => date("Y-m-d")
            );
            $query = "
			INSERT INTO news 
			(image, title, brief, descr, date) VALUES 
			(:image, :title, :brief, :descr, :date)
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

    function fetch_single_new($id) {
        $query = "SELECT * FROM news WHERE id='" . $id . "'";
        $statement = $this->connect->prepare($query);
        if ($statement->execute()) {
            foreach ($statement->fetchAll() as $row) {
                $data['image'] = $row['image'];
                $data['title'] = $row['title'];
                $data['brief'] = $row['brief'];
                $data['descr'] = $row['descr'];
                $data['date'] = $row['date'];
            }
            return $data;
        }
    }

    function update_new() {
        if (isset($_POST['title'])) {
            $form_data = array(
                ':image' => $_POST['image'],
                ':title' => $_POST['title'],
                ':brief' => $_POST['brief'],
                ':descr' => $_POST['descr'],
                ':date' => date("Y-m-d"),
                ':id' => $_POST['id']
            );
            $query = "
			UPDATE news 
			SET image = :image, title = :title, brief = :brief, descr = :descr, date= :date
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

    function delete_new($id) {
        $query = "DELETE FROM news WHERE id = '" . $id . "'";
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