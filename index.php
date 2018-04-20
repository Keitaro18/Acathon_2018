<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menu</title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <?php include 'include/header.php'; ?>

    </head>

    <body>

        <embed src="msc/FreeSwitzerland.mp3" width="0" height="0" autostart="true" loop="True" align="left">

        <div class="text-center">
            <form method='post' action='salle_un.php'>
                <input type="submit" id="boutonjouer" name="" value="Jouer">
            </form>
        </div>



        <form class="container" action="" method="post">
            <div id="expli" class="pad-section">
                <hr />
               <div class="text-center">
                    <div class="col-12">
                        <a href="#expliModal" data-toggle="modal">
                            <div class="tailleimg zoom">
                                <div class="text-center">

                                    <input type="button" id="bouton_aide" value="Règles du jeu">

                                </div>
                            </div>
                    </div></a>
               </div>
            </div>
        </form>

    <!-- Modal projet 1 -->
        <div class="modal fade" id="expliModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Règles du jeu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                       <form id="contact-form_login" action="" method="post" role="form">
                           <div class="">
                              Ce jeu est un escape game ; il consiste à s'évader d'un bunker en ayant tout les objets de la pièce où l'on est,
                              pour ensuite aller dans la pièce d'à côté (6 pièces en tout), avec des points d'action en mangeant de la nourriture.
                              ( ! tout les objets doivent être trouvés pour avancer ! )
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>

         <?php include 'includes/footer.php'; ?>
    </body>
</html>
