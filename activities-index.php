<?php
$current = "activities";
if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 1;
}
$title = "Activités - Office du tourisme Biscarosse";
?>
<?php include_once('_inc/header.php')  ?>

<?php include_once('activities/activities-'.$page.'.php')  ?>
<section>
    <div class="container">
		<ul class="pagination">
			<li class="<?php if($page==1){ echo 'active'; }?>"><a href="<?php echo $route['activities-index']; ?>?page=1<?php saison(); ?>">1</a></li>
			<li class="<?php if($page==2){ echo 'active'; }?>"><a href="<?php echo $route['activities-index']; ?>?page=2<?php saison(); ?>">2</a></li>
			<li class="<?php if($page==3){ echo 'active'; }?>"><a href="<?php echo $route['activities-index']; ?>?page=3<?php saison(); ?>">3</a></li>
		</ul>
	</div>
</section>
<?php include_once('_inc/footer.php')  ?>
