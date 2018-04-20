<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        </script>
        <title>Menu</title>

        </script>
    </head>

    <body>

        <embed src="msc/FreeSwitzerland.mp3" width="0" height="0" autostart="true" loop="True" align="left">

        <div class="text-center">
            <input type="button" id="boutonjouer" name="" value="Jouer">
        </div>



        <form class="container" action="" method="post">
            <div id="expli" class="pad-section">
                <hr />
               <div class="text-center">
                    <div class="col-12">
                        <a href="#expliModal" data-toggle="modal">
                            <div class="tailleimg zoom">
                                <div class="text-center">
                                    <input type="button" id="bouton_aide" name="" value="Règles du jeu">
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
                       <form id="contact-form_login" class="" action="controller/signIn.php" method="post" role="form">
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


       <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
       <script type="text/javascript" src="../js/anim.js">

       </script>
    </body>


</html>
