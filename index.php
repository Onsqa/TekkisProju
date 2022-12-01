<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TekkisSQL</title>
        <link rel="stylesheet" href="./style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body class="bg">
        <div class="container p-3 pb-md-4 mx-auto ">
            <h1 class="display-4 fw-normal">Tekkispaja proju </h1>
                <div class="form-group ">
                    <!-- Search form -->
                    <form action="search.php" method="POST">
                        <input type="text" name="search" class="form-control" pattern=".{1,}" placeholder="Hae (Väh 1 merkkiä)" required>
                        <br>
                        <button type="submit" name="submit-search" class="btn btn-primary">Etsi tietoa</button>
                        <br>
                        <br>
                    </form>
                    <!--Tiedon lisäys SQL-->
                    <form action="addtosql.php" method="POST">
                        <input type="text" name="info" class="form-control" pattern=".{4,}" placeholder="Tieto jota lisätään (Vähintään 4 merkkiä)" required>
                        <br>
                        <input type="text" name="source" class="form-control"  placeholder="Lähde">
                        <br>
                        <button type="submit" name="submit-addtosql" class="btn btn-success">Lisää tietokantaan</button>
                    </form>
                </div>
        </div>


        <?php
            include 'footer.php' 
        ?>
    </body>
</html>
