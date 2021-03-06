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

            <div class="row article">
                <article class="col-md-12">
                    <div class="slogan">
                        <p>
                        Jean-Pierre MARUTA
                        </p>
                    </div>
                    <div class="presentation">
                        <p>
                        Un développeur PHP/Symfony pour des sites à votre image!
                        </p>
                </article>
            </div>

            <div class="row actions">
                <div class="titre01">
                    <p class="liste2">
                    Quel est mon parcours?
                    </p>
                </div> 
                <div class="col-sm-4 imgi01"><img src="css/images/parcours.jpg" alt="..."><br><br>
                </div>

                <div class="col-sm-8 cv">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                <br><br><br>
                <p><a href="cv.html" class="btn btn-primary" role="button"> 
            	<i class="fa fa-shopping-cart"></i> Cliquez pour voir mon CV!</a></p>

                </div> 
               
            </div>  

            <?php include("footer.php"); ?>

        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>

    </body>

</html>