<?php
include 'conn.php'
?>

<!-- echo "<tr><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["location"] . "</td></tr>"; -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Zeo Data_Demo sheet</title>
</head>
<body >
    <div class="d-flex justify-content-center align-items-center p-10 m-10 ">

    <?php
        $data_fetcher = "select * from entityclass";
        if ($result = $conn -> query($data_fetcher)) {
            $c=0;
            while ($row = $result -> fetch_row()) {
           
                echo "<table class='table'>";
                if($c=0){ 
                    echo "
                    <thead>
                        <tr>
                            <th scope='col'>".$row[0]."</th>
                            <td scope='col'>".$row[1]."</td>
                            <td scope='col'>".$row[2]."</td>
                            <td scope='col'>".$row[3]."</td>
                            <td scope='col'>".$row[4]."</td>
                            <td scope='col'>".$row[5]."</td>
                        </tr>
                    </thead>";

                    $c+=1;
                }else {
                    
                    echo "<tbody>
                      <tr>
                      <th scope='col'>".$row[0]."</th>
                      <td scope='col'>".$row[1]."</td>
                      <td scope='col'>".$row[2]."</td>
                      <td scope='col'>".$row[3]."</td>
                      <td scope='col'>".$row[4]."</td>
                      <td scope='col'>".$row[5]."</td>
                      </tr>
                      </tbody>";
                }
                echo "</table>";     
            }
        }
          
    ?>
    
        
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>