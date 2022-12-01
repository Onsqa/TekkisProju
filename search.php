<?php 
    include 'sql-connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haun tulokset</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class ="bg">
    <div class="p-3 pb-md-4 mx-auto text-center">
        <h1 class ="display-4 fw-normal"> Haun tulokset: </h1>
        <?php  
            if(isset($_POST['submit-search'])){
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM data WHERE info LIKE '%$search%' OR source LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                echo "Haullasi löytyi ".$queryResult." tulosta! ";
                if($queryResult > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class ='p-3 pb-md-4 mx-auto text-center'>";
                        echo "<h2> Tieto:</h2>"; 
                        echo '<h4>'.$row['info'].'</h4>';
                        echo  '<h2> Source: </h2>';
                        echo '<h4>'.$row['source'].'</h4>';
                        echo '</div>';
                    }
                } else {
                    echo "Haullasi ei löytynyt tuloksia!";
                }
            }
        ?> 
    </div>

        <?php
            include 'footer.php' 
        ?>
    </body>
</html>

