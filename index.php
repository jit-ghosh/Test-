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

        <!-- Navbar -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="container m-0 p-0" style="width: 150%;">
        <table class='table table-bordered border border-secondary '>
            <thead>
                <tr class="table-dark" style="width: 150%;">
                    <th>Sl No.</th>
                    <th>Legal Entity Name/ID</th>
                    <th>Country of Incorporation</th>
                    <th>Country of Tax Residence/Country of Central Management and Control</th>
                    <th>Ownership Information</th>
                    <th>Outside Client Group Ownership </th>
                    <th colspan="2">Self-certs or US tax forms received from non-Client group Owners?</th>
                    <th>Principal purpose / activities</th>
                    <th>Assets/Liabilities Information</th>
                    <th>Documentation Provided</th>
                    <th>Local Law Opinion Sought</th>
                    <th>Any distinguishing features of the legal entity</th>
                    <th>Proposed CRS Classification</th>
                    <th>Proposed FATCA Classification</th>
                    <th>Justification</th>
                    <th>Structure chart provided by Client</th>
                    <th>Snippet of SC</th>
                    <th class="bg-danger text-black">Email Subject Line - INTERNAL</th>
                    <th class="bg-warning text-black ">Change in facts & circumsatnces</th>
                </tr>
            </thead>

    <?php
        $data_fetcher = "select * from entityclass";
        if ($result = $conn -> query($data_fetcher)) {
            $c=0;
            while ($row = $result -> fetch_row()) {

                    echo "
                    <tbody>
                        <tr>
                            <td>".$row[0]."</td>
                            <td>".$row[1]."</td>
                            <td>".$row[2]."</td>
                            <td>".$row[3]."</td>
                            <td>".$row[4]."</td>
                            <td>".$row[5]."</td>
                            <td colspan='2'>".$row[6]."</td>
                            <td>".$row[7]."</td>
                            <td>".$row[8]."</td>
                            <td>".$row[9]."</td>
                            <td>".$row[10]."</td>
                            <td>".$row[11]."</td>
                            <td>".$row[12]."</td>
                            <td>".$row[13]."</td>
                            <td>".$row[14]."</td>
                            <td>".$row[15]."</td>
                            <td>".$row[16]."</td>
                            <td>".$row[17]."</td>
                            <td>".$row[18]."</td>
                        </tr>                    
                    </tbody>";
                }
                echo "</table>";     
            }
        
          
    ?>
      
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>