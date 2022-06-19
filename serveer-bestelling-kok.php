<?php
    include "database.php";
    $db = new database();
  
    // serveer-bestelling-kok
    
    if (isset($_GET['ID'])) {  

            $id = $_GET['ID'];
            $geserveerd = "klaar om te serveren";
                $sql = "UPDATE bestellingen SET geserveerd=:geserveerd WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'geserveerd' => $geserveerd
                    ];
                        $db->edit($sql,$placeholders, "bestellingen-kok.php");
        }

    // serveer-bestelling-ober
    $db = new database();

    if (isset($_GET['ID'])) {  

            $id = $_GET['ID'];
            $geserveerd = "geserveerd";
                $sql = "UPDATE bestellingen SET geserveerd=:geserveerd WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'geserveerd' => $geserveerd
                    ];
                        $db->edit($sql,$placeholders, "bestellingen-ober.php");
        }

    // serveer-bestelling-barman
    $db = new database();

    if (isset($_GET['ID'])) {  

            $id = $_GET['ID'];
            $geserveerd = "klaar om te serveren";
                $sql = "UPDATE bestellingen SET geserveerd=:geserveerd WHERE ID=:ID";

                    $placeholders = [
                        'ID' => $id,
                        'geserveerd' => $geserveerd
                    ];
                        $db->edit($sql,$placeholders, "bestellingen-barman.php");
        }
?>
