

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="ihm/css/bootstrap.min.css">
    <link rel="stylesheet" href="ihm/css/MUSA_carousel-extended.css">
    <link rel="stylesheet" href="ihm/css/Navigation-with-Button1.css">

</head>


<?php
$phrase = 'Ce site est inaccessible'
.'www.ecosia.org n\'autorise pas la connexion.'
.'Essayez les suggestions ci-dessous :'
.'Vérifier la connexion'
.'Vérifier le proxy et le pare-feu'
.'ERR_CONNECTION_REFUSEDCe site est inaccessible'
.'www.ecosia.org n\'autorise pas la connexion.'
.'Essayez les suggestions ci-dessous :'
.'Vérifier la connexion'
.'Vérifier le proxy et le pare-feu'
.'ERR_CONNECTION_REFUSEDCe site est inaccessible'
.'www.ecosia.org n\'autorise pas la connexion.'
.'Essayez les suggestions ci-dessous :'
.'Vérifier la connexion'
.'Vérifier le proxy et le pare-feu'
.'ERR_CONNECTION_REFUSEDCe site est inaccessible'
.'www.ecosia.org n\'autorise pas la connexion.'
.'Essayez les suggestions ci-dessous :'
.'Vérifier la connexion'
.'Vérifier le proxy et le pare-feu'
.'ERR_CONNECTION_REFUSEDCe site est inaccessible'
.'www.ecosia.org n\'autorise pas la connexion.'
.'Essayez les suggestions ci-dessous :'
.'Vérifier la connexion'
.'Vérifier le proxy et le pare-feu'
.'ERR_CONNECTION_REFUSED';
?>



<div class=""contenu">
     <p><?php echo $phrase ?> </p>
 
    <div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="ihm/img/jeu.jpg" style="width:100%""></div>

                                        <div class="item" data-slide-number="1">
                                       <img src="ihm/img/jeu1.jpg" style="width:100%""></div>

                                        <div class="item" data-slide-number="2">
                                       <img src="ihm/img/jeu.jpg" style="width:100%""></div>
                                       


                                 

                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Jeu du Mois</h2>
                               
                                    <p class="sub-text">October 24 2014 </p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Slider Two</h2>
                                  
                                    <p class="sub-text">October 24 2014 </p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Slider Three</h2>
                                  
                                    <p class="sub-text">October 24 2014 </p>
                                </div>

                             

                                
                               
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

             
        </div>
</div>


