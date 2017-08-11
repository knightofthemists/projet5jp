<!DOCTYPE html>

<html>

    <head>
        <!-- Metatags, liens vers Bootstrap et feuilles de styles -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <!-- css -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="container-fluid">
            
            <div class="row">
                
                <?php include("menu.php"); ?>

            </div>

            <div class="row titreactu">
            <div class="titre03">
                <p class="actus">
                Consultez ici la liste des posts
                </p>
            </div>
            </div>

            

            <?php include("footer.php"); ?>

        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>

    </body>

</html>