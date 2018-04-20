<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/salle_un.css" />
        <title>Salle 1</title>
    </head>
    <body>
        <map name="image-map">
            <area target="" alt="hache" title="hache" href="" coords="159,568,111,405" shape="rect" id='hache'>
            <area target="" alt="hp" title="hp" href="" coords="817,578,9" shape="circle" id='hp'>
            <area target="" alt="tel" title="tel" href="" coords="1055,518,1124,584" shape="rect" id='tel'>
        </map>


        <div id="fond" class="img-fluid">
            <!-- <img src="img/ascenceur.png"> -->
            <img class='back' src="img/hi.png" usemap="#image-map">
        </div>

        <!-- <div id="tel" class="img-fluid">
            <img src="img/objets/telephone-ascensseur.png">
        </div>

        <div id="hp">
            <img src="img/objets/haut parleur.png">
        </div>

        <div id="hache">
            <img src="img/objets/hache.png">
        </div> -->



     <?php include 'includes/footer.php'; ?>

    </body>
</html>
