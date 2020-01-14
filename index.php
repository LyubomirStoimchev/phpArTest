<?php
include_once 'database/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        .card{
            margin: 15px;
            margin-bottom: 0px;
            padding: 2px;
            background-color: #e8eaed;
        }
        
        .card-img-top{
            padding: 5px;
        }

        .card-body{
            padding: 10px;
        }
        
        .card-title{
            text-align: center;
        }

        .btn{
            display: block;
            width: 100%;
        }
    </style>

</head>

<body>
    <form action="viewer.php" method="get">
    <div class="container">
        <div class="row">

            <?php
            $sqlTiles = "SELECT * FROM objects;";
            $resultTiles = mysqli_query($conn, $sqlTiles);

            if (mysqli_num_rows($resultTiles) > 0) {
                while ($row = mysqli_fetch_assoc($resultTiles)) {
                    $tileName = $row['Name'];
                    $tileId = $row['Id'];
                    $thumbnailUrl = $row['thumbnailUrl'];

                    echo '       
                    <!-- <input type="submit" name="modelId" value="' . $tileId . '"/> -->
                    
                    <div class="card col-sm-1 col-md-2 col-lg-3 border-light">
                        <img class="card-img-top img-fluid" src="' . $thumbnailUrl . '" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">' . $tileName . '</h4>
                            <button class="btn btn-primary" type="submit" name="modelId" value="' . $tileId . '">Go to model</button>
                        </div>
                    </div>
    
                      ';
                }
            }
            ?>
        </div>
    </div>
    </form>
</body>

</html>