<?php
$current = "activities-show";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $desc = $_GET['desc'];
    $lat = $_GET['lat'];
    $long = $_GET['long'];
    $ville = $_GET['ville'];
    $adresse = $_GET['adresse'];
    $postal = $_GET['postal'];
}
else{
    $id = 1;
    $desc = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt debitis ea non blanditiis tempore autem.";
    $lat = "Non spécifié";
    $long = "Non spécifié";
    $ville = "Non spécifié";
    $adresse = "Non spécifié";
    $postal = "Non spécifié";
}

$title = "$id - Office du tourisme Biscarosse";
$description = $desc;
?>
<?php include_once('_inc/header.php')  ?>
<section class="activitie-show">
    <div class="container-fluid">
        <div class="row">
            <div itemscope itemtype="http://schema.org/Place">
                <div class="col-xs-12 col-sm-9 col-lg-offset-1 col-lg-6">
                    <img src='http://picsum.photos/320/220?image=<?php echo $id?>' width="768px" height="432px" alt="" class="img-responsive" itemprop="image">
                </div>
                <div class="col-xs-12 col-sm-3 col-lg-4">
                    <div class="row">
                        <div class="place-body">
                            <h1 class="place-title" itemprop="name"><?php echo $id?></h1>
                            <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                Noté <span itemprop="ratingValue">3.5</span>/5
                                basé sur <span itemprop="reviewCount">11</span> avis.
                            </div>
                            <div itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
                                <p>Latitude: <span itemprop="latitude"><?php echo $lat?></span></p>
                                <p>Longitude: <span itemprop="longitude"><?php echo $long?></span></p>
                                <div itemprop="adress" itemscope itemtype="https://schema.org/PostalAdress">
                                    <span itemprop="streetAdress"><?php echo $adresse?></span>, <span itemprop="postalCode"><?php echo $postal?></span> <span itemprop="adressLocality"><?php echo $ville?></span> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once('_inc/footer.php')  ?>
<!-- Product schema.org -->
