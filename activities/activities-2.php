<section>
    <div class="container">
        <div class="row">
            <?php for($i=10; $i<=18; $i++){?>
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
    </div>
</section>