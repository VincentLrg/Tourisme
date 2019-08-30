<?php
    $current = "home";
    $title = "Accueil - Office du tourisme Biscarosse"
?>
<?php include_once('_inc/header.php')  ?>

    <section class="hero">
        <ul id="lightSlider">
            <li>
                <img src="https://picsum.photos/1920/480?image=1061">
            </li>
            <li>
                <img src="https://picsum.photos/1920/480?image=1053">
            </li>
            <li>
                <img src="https://picsum.photos/1920/480?image=1041">
            </li>
        </ul>
    </section>
    
    <section class="container">
        <h2>Biscarrosse</h2>
        <p>La station balnéaire de Biscarrosse se situe dans le Nord des Landes au sud-ouest de Bordeaux (70 km) et c’est l’une des villes balnéaires les plus importantes des Landes. La ville est divisée en trois parties : Biscarrosse Plage qui est le cœur de la station balnéaire avec ses longues plages de sable, Biscarrosse Lac avec son immense Lac Nord où l’on peut profiter des plages avec une eau calme et Biscarrosse-Ville à l’intérieur des terres.</p>
        <p>Biscarrosse c’est une plage longue de 15 km en bordure d’une magnifique forêt où l’on peut se balader à pied ou à vélo sur plus de 100 km de pistes cyclables. La dune verte offre un très beau panorama sur cette immense plage de sable.</p>
        <p>Les lacs de Biscarrosse proposent une alternative aux différentes plages du front de mer. On pourra s’y baigner en toute tranquillité (absence de vague et une eau plus chaude que dans l’océan) ou pratiquer de nombreux sports nautiques autour du Port Maguide. On y trouve également de nombreux cafés et restaurants.</p>
        <br>
        <h2>Les activités</h2>
        <div class="row">
            <?php for($i=1; $i<=4; $i++){?>
            <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="card">
                    <a href="<?php echo $route['activities-show']?>?id=<?php echo $i?>">
                        <img src="http://picsum.photos/320/220?image=<?php echo $i?>" alt="" class="img-responsive">
                    </a>
                    <div class="card-body">
                        <p class="card-title">Titre de l'activité <?php echo $i?></p>
                        <p>
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </section>

<?php include_once('_inc/footer.php')  ?>
