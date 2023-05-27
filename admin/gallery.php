<?php 
include('../connection.php');
session_start();
if (!isset($_SESSION['admin-name'])){
    $_SESSION['Ahistory'] = "../email.php";
    header("Location: login.php");
}
?>
<?php include 'inc/config.php'; $template['header_link'] = 'Galerry'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<?php
$queryA = "SELECT pictures.pic_id, pictures.pic_car, pictures.pic_path, cars.car_id, cars.car_maker FROM pictures RIGHT JOIN cars ON pictures.pic_car = cars.car_id";
$pictures = mysqli_query($conn, $queryA);
$queryB = " SELECT DISTINCT car_maker FROM cars";
$cars = mysqli_query($conn, $queryB);

?>
<!-- Page content -->
<div id="page-content">
    <!-- Gallery Header -->
    <div class="content-header">
        <!-- Gallery Filter Links -->
        <!-- Custom Gallery functionality is initialized in js/pages/compGallery.js -->
        <!-- Add the category value you want each link in .gallery-filter to filter out in its data-category attribute. Add the value 'all' to show all items -->
        <div class="header-section text-center">
            <div class="btn-group gallery-filter">
                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary active" data-category="all">All</a>
                <?php  while ($car = mysqli_fetch_assoc($cars)) { ?>
                    <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="<?php echo $car['car_maker']; ?>"><?php echo $car['car_maker']; ?></a>
                <?php }?>
            </div>
        </div>
        <!-- END Gallery Filter Links -->
    </div>
    <!-- END Gallery Header -->

    <!-- Gallery Items -->
    <!-- Lightbox functionality is based on Magnific Popup plugin (initialized in js/app.js -> uiInit()) -->
    <!-- Add the category value for each item in its data-category attribute (for the filter functionality to work) -->
    <div class="row gallery">
        <?php  if (mysqli_num_rows($pictures) > 0) {  while ($picture = mysqli_fetch_assoc($pictures)) { ?>
        <div class="col-sm-3">
            <div class="gallery-image-container animation-fadeInQuick2" data-category="<?php echo $picture['car_maker']; ?>">
                <img src="../<?php echo $picture['pic_path']; ?>" alt="Image">
                <a href="../<?php echo $picture['pic_path']; ?>" class="gallery-image-options" data-toggle="lightbox-image" title="Image Info">
                    <h2 class="text-light"><strong><?php echo $picture['car_maker']; ?></strong></h2>
                    <i class="fa fa-search-plus fa-3x text-light"></i>
                </a>
            </div>
        </div>
        <?php }} else { ?>
        <div class="col-sm-3">
            <div class="gallery-image-container animation-fadeInQuick2" data-category="<?php echo $picture['car_maker']; ?>">
                <img src="img/placeholders/photos/picture.jpg" alt="Image">
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- END Gallery Items -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/compGallery.js"></script>
<script>$(function(){ CompGallery.init(); });</script>

<?php include 'inc/template_end.php'; ?>