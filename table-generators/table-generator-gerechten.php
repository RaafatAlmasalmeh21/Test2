  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Results table</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        
            
        <?php

        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // naam van de id kolom per table
            $key = $from."ID";
            $from1 = "categorie";
            ?>
            <table class="table table-striped">
            
            <?php 
            // haal de keys van de array op; dit zijn de kolomnamen
            $columns = array_keys($dataset[0]);
            ?>
            
            <tr>
                <?php foreach($columns as $column){ ?>
                    <th>
                        <strong>
                            <?php echo $column?>
                        </strong>
                    </th>
                <?php } ?>
                <th colspan="2">action</th>
            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>

                    <td>
                        <a href="edit-<?php echo $from1?>.php?ID=<?php echo $row['ID']; ?>
                        &naam=<?php echo $row['naam']; ?>
                       " class="btn btn-primary" >Edit</a>
                    </td>
                    <td>
                        <a href="delete-<?php echo $from1?>.php?ID=<?php echo $row['ID']; ?>
                       " class="btn btn-danger" >Delete</a>
                    </td>
                   
                    </tr>
            <?php }
         }
    }?>
    </table>

    <br>
    
    </body>
    
</html>