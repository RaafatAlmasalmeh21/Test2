<?php
include "database.php";
    $db = new database();

//delete-Hoofdgerecht    

if (isset($_GET['ID'])) {

    $id = $_GET['ID'];
        $sql = "DELETE FROM gerechtcategorien WHERE ID=:ID";
            $placeholder = [
                'ID'=> $id
            ];
                $db->delete($sql, $placeholder, "nieuw-hoofdgroep.php");
}

//delete-dranken	

if (isset($_GET['menu_item_id'])) {

    $id = $_GET['menu_item_id'];
        $sql = "DELETE FROM menu_items WHERE ID=:ID";
            $placeholder = [
                'ID'=> $id
            ];
                $db->delete($sql, $placeholder, "nieuw-drank.php");
}

//delete-klant

if (isset($_GET['ID'])) {

    $id = $_GET['ID'];
        $sql = "DELETE FROM klant WHERE ID=:ID";
            $placeholder = [
                'ID'=> $id
            ];
                $db->delete($sql, $placeholder, "nieuw-klant.php");
}

//delete-item

if (isset($_GET['ID'])) {

    $id = $_GET['ID'];
        $sql = "DELETE FROM menu_items WHERE ID=:ID";
            $placeholder = [
                'ID'=> $id
            ];
                $db->delete($sql, $placeholder, "nieuw-menu-item.php");
}

//delete-reservering

if (isset($_GET['ID'])) {

    $id = $_GET['ID'];
        $sql = "DELETE FROM reserveringen WHERE ID=:ID";
            $placeholder = [
                'ID'=> $id
            ];
                $db->delete($sql, $placeholder, "overzicht-alle-reservering.php");
}

//delete-supgroep

if (isset($_GET['ID'])) {

    $id = $_GET['ID'];
        $sql = "DELETE FROM gerechtsoorten WHERE ID=:ID";
            $placeholder = [
                'ID'=> $id
            ];
                $db->delete($sql, $placeholder, "nieuw-subgroep.php");
}

?>