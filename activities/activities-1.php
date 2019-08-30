<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="card">
                    <a href="<?php echo $route['activities-show']?>?id=Bisc'Aventure&amp;desc=BISC’AVENTURE®,parc accrobranche pour la famille dans les Landes en Aquitaine, à proximité du bassin d’Arcachon,de la Dune du Pilat,de Bordeaux en Gironde.&amp;lat=44.4440042&amp;long=-1.2512335&amp;ville=Biscarosse&amp;adresse=1200 Avenue de la Plage&amp;postal=40602">
                        <img src="img/accrobranche.jpg" width="320px" height="220px" alt="" class="img-responsive">
                    </a>
                    <div class="card-body">
                        <p class="card-title">Bisc'Aventure</p>
                        <p>
                            BISC’AVENTURE®,parc accrobranche pour la famille dans les Landes en Aquitaine, à proximité du bassin d’Arcachon,de la Dune du Pilat,de Bordeaux en Gironde.
                        </p>
                    </div>
                </div>
            </div>
            <?php for($i=2; $i<=9; $i++){?>
            <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="card">
                    <a href="<?php echo $route['activities-show']?>?id=<?php echo $i?>&amp;desc=Lorem ipsum dolor sit amet.&amp;lat=44.4440042&amp;long=-1.2512335&amp;ville=Biscarosse&amp;adresse=12 lorem ipsum&amp;postal=40602">
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
    </div>
</section>