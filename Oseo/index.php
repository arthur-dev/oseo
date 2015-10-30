<!DOCTYPE html>
<html>
<head>
    <?php session_start(); ?>

    <!-- balise de base -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- balise de base -->


    <!-- Referencement -->

    <title>Oseo formation e-commerce prestashop woocommerce paris bordeaux lyon</title>

    <meta name="robots" content="index, follow" />

    <meta name="description" content="Oseo formations e-commerce Bordeaux et paris. Apprenez à créer votre e-boutique en 2 jours grâce à notre formation e-Commerce WooCommerce et notre formation e-commerce bootstrap" />
    <meta name="Robots" content="all" />
    <meta name="robots" content="index,follow"/>
    <meta name="revisit-after" content="5"/>
    <meta name="author" content="Oseo formation prestashop woocommerce e-commerce"/>
    <meta name="rating" content="general"/>

    <!-- Referencement -->


    <!-- CSS Style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.yellow-blue.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <link rel="stylesheet" type="text/css" href="lib/style.css" media="all"/>
    <!-- CSS Style -->

</head>

<body>

<!-- navbar -->



<nav id="princ" style="">

    <div class="row">
        <div class="col-sm-offset-1 col-sm-3">
            <div id="logot" style="color: white;">
                <span class="b ">O</span>seo
            </div>
        </div>
        <div class="col-sm-8" style="padding-bottom: 10px;">
            <div id="navbar">

                <a href="html/formations.html"class="navscroll" data-id="4" id="nav1">Formation</a>&nbsp;&nbsp;&nbsp;
                <a href="html/Faq.html" class="navscroll" data-id="5" id="nav2">Une question ?</a> &nbsp;&nbsp;&nbsp;
                <a href="html/nosvaleurs.html" class="navscroll" data-id="5" id="nav3">Nos valeurs</a> &nbsp;&nbsp;&nbsp;
                <button id="btntarif">
                    Prochaines formations
                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>


    </div>



</nav>

<style>




    #logot{
        font-size:40px;
        text-align: left;
        margin-top:  8%;

    }



</style>




<!-- navbar -->

<!-- page 1 -->
<div id="inter1">

    <style>

        #firstpage {
            color: white;
            padding-top: 10%;

            text-align: center;
        }

        #firstpage h3 {
            font-size: 60px;
            color: white;
        }

        #firstpage h4 {
            font-size: 30px;
            color: white;

        }
    </style>


    <div class="center_text">
        <div id="firstpage" class="center_text" style="padding-top: 32%;">


            <?php

            if (isset($_SESSION['msg']))
            {
                echo '<div class="alert alert-success" id="temp" role="alert" style="">'.$_SESSION['msg'].'</div>' ;
                $_SESSION['msg']=null;
            }

            ?>



            <div style="background-color: rgb(246,246,251); padding: 1px;">
            <h3 style="color:black;">
                <span class="green">O</span>serez-vous croquer le fruit de la connaissance ?
            </h3>
            </div>


        </div>




    </div>

</div>
<!-- page 1 -->






<!-- page 2 Explication -->


<div id="page1">


    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-offset-1 col-sm-10">


                <div class="row">


                    <h1><span class="h1bigger">O<span class="grey">seo</span></span> <span class="grey">Formations à la création de sites internet</span> </h1>


                    <hr class="midhr">
                </div>

                <div class="row">

                    <img src="pics/elementaccueil/icon_page_1.png" class="center_img" style="width:10%;">

                </div>


                    <div class="row">
                    <hr class="midhr">

                        <h2>
                            <span class="grey">
                                Vous avez l’idée, nous vous transmettons les outils
<br>
                            <br>Apprenez à créer votre <span class="green">e-commerce</span> rapidement, créez votre propre <span class="green">e-boutique</span> qui s'adaptera à vos produits et vos envies
<br>
                            <br>Devenez <span class="green">acteur</span> de votre réussite grâce aux formations Oseo
<br>
                        </span>
                        </h2>

                        <button class="center_img formation" style="font-size:30px;">Créer une e-boutique en deux jours</button>


                </div>
                <br><br><br>



            </div>




        </div>
    </div>


</div>

<!-- Intercal -->

<div id="inter2"></div>

<!-- page 3 Solution rapide et efficace -->

<div id="page2" >


    <div class="container-fluid">
        <div class="row ">
            <div class=" col-sm-12">

                <div class="row margebottom">
                    <h3 >Des formations rapides et efficaces </h3>
                </div>

                <div class="row" >

                    <div class="col-sm-3" style=" padding-left: 0px;">
                        <img src="pics/elementaccueil/chrono-01.png"  style="width:100%; padding-right: 0px; ">
                    </div>
                    <div class="col-sm-6">
                        <p class="center_text">
                            Grâce aux outils que nous avons <span class="green">sélectionnés</span> pour vous,
                            <br><br>Nous relevons le <span class="green">défi</span> de vous apprendre à créer votre e-commerce en <span class="green">2 jours</span>
                            <br><br>Vous atteindrez vos <span class="green">objectifs</span> de création à l’issu de la formation
                            <br><br>Vous n’êtes pas <span class="green">prêt</span> à la fin de la formation? Nous vous <span class="green">remboursons</span>!

                        </p>
                    </div>
                    <div class="col-sm-3" style=" padding-right: 0px; padding-left: 0px;">
                        <img src="pics/elementaccueil/cible-01.png" style="width:100%;  position:relative; padding-top:30%;">
                    </div>

                </div>
                <br><br>
                <button  class="center_img formation">Nos formations</button>
                <br><br><br><br>



            </div>




        </div>
    </div>


</div>

<!-- page 4 Solutions adapté -->


<div id="page3" class="stripped">


    <div class="container-fluid">
        <div class="row ">
            <div class=" col-sm-12">







                <div class="row">
                    <div class="col-sm-6" style="margin:0px; padding:0px;">
                        <img src="pics/20.jpg" style="width:100%;">
                    </div>
                    <div class="col-sm-6 center_text">

                        <h3 >Des solutions adaptées à vos besoins </h3>

                        <p class="center_text">
                        <br>Nous sommes intimement persuadés que vous êtes capable de créer un site internet

                        <br><br>Pour vous aider, nous adaptons chaque formation aux niveaux et aux besoins des participants

                        <br><br>Vous souhaitez savoir quelle formation vous correspond ?
                        <br>Faites le test
                            </p>


                        <br><br>

                        <button id="testjeubtn" class="center_img">
                            Quelle formation me convient ?
                        </button>



                    </div>
                </div>


            </div>
        </div>
    </div>


</div>

<!-- Intercal
<div id="inter3"></div>
-->




<!-- page 5 Des expert à votre disposition -->

<div id="page4" >


    <div class="container-fluid">
        <div class="row ">


                <div class=" col-sm-12">

                    <div class="row margebottom">
                        <h3 >Des Experts à votre disposition </h3>
                    </div>

                    <div class="row" >

                        <div class="col-sm-3" style=" padding-left: 0px;">
                            <img src="pics/elementaccueil/brain_light-01-01.png"  style="width:100%; padding-right: 0px; ">
                        </div>
                        <div class="col-sm-6">
                            <p class="center_text">
                                Nous avons sélectionné pour vous des<span class="green"> experts jeunes et dynamiques</span>.
                                <br><br>Passionnés par le <span class="green">Web</span>, ils vous transmettront leur savoir
                                <br>et vous permettront de mener à bien vos <span class="green">projets</span>.
                                <br>
                                <br>Le plus <span class="green">Oseo</span>, les experts restent à votre disposition
                                <br>pendant 30 jours après la formation



                            </p>
                        </div>
                        <div class="col-sm-3" style=" padding-right: 0px; padding-left: 0px;">
                            <img src="pics/elementaccueil/expert_30-01.png" style="width:100%;  position:relative; padding-top:30%;">
                        </div>

                    </div>
                    <br><br>
                    <button class="nosvaleurs center_img">Nos valeurs</button>
                    <br><br><br><br>



                </div>









        </div>
    </div>


</div>



<!-- page 6 Solutions adapté -->


<div id="page5" class="stripped">


    <div class="container-fluid">
        <div class="row ">
            <div class=" col-sm-12">



                <div class="row">
                    <div class="col-sm-6 center_text" style="margin:0px; padding:0px;">
                        <img src="pics/Cupcakes.jpg" style="width:100%;">
                    </div>
                    <div class="col-sm-6 ">
                        <h3 >Des rassemblements Chaleureux et conviviaux </h3>
                        <br><br>
                        <p class="center_text">
                        Parce que nous sommes convaincu qu’une <span class="green">bonne atmosphere</span><br> permet d'<span class="green">apprendre</span> mieux,
                       <br> <br><br><br>
                        Nous mettons un point d’honneur à vous accueillir avec le <span class="green">sourire</span> !
                        <br><br><br><br>En <span class="green">bonus</span>, vous goûterez aux réalisations de notre amie
                        <br><br>
                        </p>








                    </div>
                </div>
                <!--

                <div class="row margebottom">
                    <h2 >Des rassemblements Chaleureux et convivial</h2>
                </div>

                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <br><br><br><br>
                        Parce que apprendre, c'est plus facile en s'amusant
                        Nous vous accueillons dans une ambiance chaude et chaleureuse
                        avec nos cupcakes maison

                        <br>Parce que se former c'est aussi rencontrer des gens
                        <br>Nous vous accueillons dans une ambiance chaude et chaleureuse afin que la formation se passe dans le cadre le plus convivial possible
                        <br>
                        <br><br><br><br>






                    </div>
                </div>
                <br><br><br><br>
                -->

            </div>
        </div>
    </div>


</div>



<!-- footer -->
<div class="footer">

</div>
<!-- footer -->



<style>
    #index{
position:fixed;
        top:25%;
        left:2%;


        z-index:3;
    }
</style>

<!--
<div id="index" >
    <img id="indeximage" src="" style="height:50vh;">

</div>
-->

<!-- TEST -->

<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="testjeu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Quelle formation est faite pour vous ?</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <br><br>
                    <p id="question" class="center_text">Voulez-vous vendre sur internet? </p>
                    <br><br>
                </div>
                <div class="row center_text" id="btnform" style="">
                    <button id="yes">Oui</button>
                    <button id="no">Non</button>
                </div>

                <div class="row center_text" id="btnquitter" style="visibility:hidden;">
                    <button id="quit">Quitter</button>

                </div>

            </div>


        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg" id="tarif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Nos prochaines formations disponibles</h3>
            </div>
            <div class="modal-body">
                <form id="forms" action="php/signin.php" method="POST">




                    <div class="row" style="padding-top: 30px;">
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" id="name" name="name" />
                                <label class="mdl-textfield__label" for="name">Nom Prénom</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" id="email" name="email" />
                                <label class="mdl-textfield__label" for="email">Email</label>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" id="tel" name="tel" />
                                <label class="mdl-textfield__label" for="email">Télephone</label>
                            </div>
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-sm-6">
                            <p class="center_text">
                                <h3>Paris</h3>
                                <hr>
                            <input type="radio" name="date" value="1" checked> Lundi 23 Novembre 2015 - Mardi 24
                             <br><br>
                            <input type="radio" name="date" value="2" checked> Samedi 28 Novembre 2015 - Dimanche 29
                            <hr>
                            <input type="radio" name="date" value="3" checked> Lundi 14 Décembre 2015 - Mardi 15
                            <br><br>
                            <input type="radio" name="date" value="4" checked> Samedi 18 Décembre 2015 - Dimanche 19
                            </p>

                        </div>
                        <div class="col-sm-6">
                            <p class="center_text">
                            <h3>Lyon</h3>
                            <hr>

                            <input type="radio" name="date" value="5" checked> Lundi 7 Décembre 2015 - Mardi 8
                            <br><br>
                            <input type="radio" name="date" value="6" checked> Samedi 12 Décembre 2015 - Dimanche 13
                            <hr><input type="radio" name="date" value="7" checked> Lundi 28 Décembre 2015 - Mardi 29
                            <br><br>
                            <input type="radio" name="date" value="8" checked> Samedi 9 Janvier 2016 - Dimanche 10
                            </p>

                            <p class="center_text">
                                <h3>Bordeaux</h3>
                            <hr>
                            <input type="radio" name="date" value="9" checked> Lundi 30 Novembre 2015 - Mardi 1 Décembre
                            <br><br><input type="radio" name="date" value="10" checked> Samedi 5 Décembre 2015 - Dimanche 6
                            <hr><input type="radio" name="date" value="11" checked> Lundi 11 Janvier 2016 - Mardi 12
                            <br><br><input type="radio" name="date" value="12" checked> Samedi 16 Janvier 2016 - Dimanche 17
                            </p>

                        </div>
                    </div>






                    <button class="center_img"  type="submit" style="margin-top: 40px; margin-bottom: 30px;">Demander une pré-insciption</button>








                </form>
            </div>


        </div>
    </div>
</div>

<!-- TEST -->

</body>






<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>

<script src="lib/js.js"></script>

<script>

    setTimeout(function(){
        $('#temp').fadeOut(800);
    },5000);
</script>

<!-- Analitycs -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69486650-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Analitycs -->

</html>