<?php
include('../connection.php');
session_start();
if (!isset($_SESSION['admin-name'])){
    $_SESSION['Ahistory'] = "..\.php";
    header("Location: login.php");
}

if (isset($_GET['id'])){        
    $id = $_GET['id'];
}
else{
    header("Location: 404.php");
    exit();
}

$queryA = "SELECT emp_eid, emp_name, emp_phone, emp_status FROM employees LIMIT 10";
$employees = mysqli_query($conn, $queryA);
$queryB = "SELECT * FROM cars WHERE car_id='$id'";
$cars = mysqli_query($conn, $queryB);
$car = mysqli_fetch_assoc($cars);
$queryC = "SELECT * FROM pictures WHERE pic_car='$id'";
$pictures = mysqli_query($conn, $queryC);

?>

<?php include 'inc/config.php'; $template['header_link'] = 'Update'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Blank Header -->
    <div class="content-header">
        <div class="row">          
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li><a href="car.php">Car</a></li>
                        <li>Edit</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Blank Header -->

    <!-- Get Started Block -->
    <div class="block full">       
        <!-- Schedule Tabs Title -->
        <div class="block-title">
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#cars-form">Edit</a></li>
                <li><a href="#cars-media">Media</a></li>
            </ul>
        </div>
        <!-- END Schedule Tabs -->

        <div class="tab-content">
            <!-- Forum -->
            <div class="tab-pane active" id="cars-form">
                <!-- Form for a new car -->
                <form action="backend/car.php" method="post" class="form-horizontal form-bordered">
                    <div class="col-md-6">  
                        <div class="block">
                            <!-- General Elements Title -->
                            <div class="block-title">
                                <h2>General Elements</h2>
                            </div>
                            <!-- END General Elements Title -->

                            <!-- General Elements Content -->                                  
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="example-select2">Maker</label>
                                <div class="col-md-5">
                                    <select id="car-maker" name="car-maker" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
                                    <?php if ($car['car_maker'] == "Ford" ) { ?> 
                                        <option selected value="Ford">Ford</option> 
                                    <?php } else { ?> 
                                        <option value="Ford">Ford</option>
                                    <?php } ?>
                                    <?php if ($car['car_maker'] == "Toyota" ) { ?> 
                                        <option selected value="Toyota">Toyota</option> 
                                    <?php } else { ?> 
                                        <option value="Toyota">Toyota</option>
                                    <?php } ?>
                                    <?php if ($car['car_maker'] == "Honda" ) { ?> 
                                        <option selected value="Honda">Honda</option> 
                                    <?php } else { ?> 
                                        <option value="Honda">Honda</option>
                                    <?php } ?>

                                    <?php if ($car['car_maker'] == "BMW" ) { ?> 
                                        <option selected value="BMW">BMW</option>
                                    <?php } else { ?> 
                                        <option value="BMW">BMW</option>
                                    <?php } ?>

                                    <?php if ($car['car_maker'] == "Nissan" ) { ?> 
                                        <option selected value="Nissan">Nissan</option> 
                                    <?php } else { ?> 
                                    <option value="Nissan">Nissan</option>
                                    <?php } ?>

                                    <?php if ($car['car_maker'] == "Tesla" ) { ?> 
                                        <option selected value="Tesla">Tesla</option> 
                                    <?php } else { ?> 
                                        <option value="Tesla">Tesla</option>
                                    <?php } ?>

                                    <?php if ($car['car_maker'] == "Mercedes-Benz" ) { ?> 
                                        <option selected value="Mercedes-Benz">Mercedes-Benz</option> 
                                    <?php } else { ?> 
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Audi" ) { ?> 
                                        <option selected value="Audi">Audi</option> 
                                    <?php } else { ?> 
                                        <option value="Audi">Audi</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Land Rover" ) { ?> 
                                        <option selected value="Land Rover">Land Rover</option> 
                                    <?php } else { ?> 
                                        <option value="Land Rover">Land Rover</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Hyundai" ) { ?> 
                                        <option selected value="Hyundai">Hyundai</option> 
                                    <?php } else { ?> 
                                        <option value="Hyundai">Hyundai</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Volkswagen" ) { ?> 
                                        <option selected value="Volkswagen">Volkswagen</option> 
                                    <?php } else { ?>     
                                        <option value="Volkswagen">Volkswagen</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Lexus" ) { ?> 
                                        <option selected value="Lexus">Lexus</option> 
                                    <?php } else { ?> 
                                        <option value="Lexus">Lexus</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Porsche" ) { ?> 
                                        <option selected value="Porsche">Porsche</option> 
                                    <?php } else { ?>     
                                        <option value="Porsche">Porsche</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Mini" ) { ?> 
                                        <option selected value="Mini">Mini</option> 
                                    <?php } else { ?>
                                        <option value="Mini">Mini</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Mazda" ) { ?> 
                                        <option selected value="Mazda">Mazda</option> 
                                    <?php } else { ?> 
                                        <option value="Mazda">Mazda</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Aston Martin" ) { ?> 
                                        <option selected value="Aston Martin">Aston Martin</option> 
                                    <?php } else { ?>  
                                        <option value="Aston Martin">Aston Martin</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Chevrolet" ) { ?> 
                                        <option selected value="Chevrolet">Chevrolet</option> 
                                    <?php } else { ?> 
                                        <option value="Chevrolet">Chevrolet</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Alfa Romeo" ) { ?> 
                                        <option selected value="Alfa Romeo">Alfa Romeo</option> 
                                    <?php } else { ?> 
                                        <option value="Alfa Romeo">Alfa Romeo</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Renault" ) { ?> 
                                        <option selected value="Renault">Renault</option> 
                                    <?php } else { ?> 
                                        <option value="Renault">Renault</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Cadillac" ) { ?> 
                                        <option selected value="Cadillac">Cadillac</option> 
                                    <?php } else { ?>
                                        <option value="Cadillac">Cadillac</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Fiat" ) { ?> 
                                        <option selected value="Fiat">Fiat</option> 
                                    <?php } else { ?>  
                                        <option value="Fiat">Fiat</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Jeep" ) { ?> 
                                        <option selected value="Jeep">Jeep</option> 
                                    <?php } else { ?> 
                                        <option value="Jeep">Jeep</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Kia" ) { ?> 
                                        <option selected value="Kia">Kia</option> 
                                    <?php } else { ?> 
                                        <option value="Kia">Kia</option>
                                    <?php } ?>
                                        
                                    <?php if ($car['car_maker'] == "Dodge" ) { ?> 
                                        <option selected value="Dodge">Dodge</option> 
                                    <?php } else { ?> 
                                        <option value="Dodge">Dodge</option>       
                                    <?php } ?>                                 
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-model">Model</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-model" value="<?php echo $car['car_model']; ?>" name="car-model" class="form-control" placeholder="Car Model" required>
                                    <span class="help-block">Example Fortuner</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-year">Year</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-year" value="<?php echo intval($car['car_year']); ?>"  name="car-year" class="form-control" placeholder="Number Only" pattern="[0-9]+" required>
                                    <span class="help-block">Example 2014</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-status">Status</label>
                                <div class="col-md-6">
                                    <select id="car-status" name="car-status" class="form-control" size="1">
                                    <?php if ($car['car_status'] == "Brand New" ) { ?> 
                                        <option selected value="Brand New">Brand New</option>
                                    <?php } else { ?> 
                                        <option value="Brand New">Brand New</option>
                                    <?php } ?>
                                    <?php if ($car['car_status'] == "Second" ) { ?> 
                                        <option  selected  value="Second">Second</option>
                                    <?php } else { ?> 
                                        <option value="Second">Second</option>
                                    <?php } ?>
                                    <?php if ($car['car_status'] == "Rental" ) { ?> 
                                        <option  selected value="Rental">Rental</option>
                                    <?php } else { ?> 
                                        <option value="Rental">Rental</option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-km">KM</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-km" name="car-km"  value="<?php echo intval($car['car_kilomatres']); ?>"  class="form-control" placeholder="Number Only" pattern="[0-9]+" required>
                                    <span class="help-block">Example 74000</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-bodytype">Body Type</label>
                                <div class="col-md-6">
                                    <select id="car-bodytype" name="car-bodytype" class="form-control" size="1">
                                    <?php if ($car['car_bodytype'] == "Sedans" ) { ?>
                                        <option selected  value="Sedans">Sedans</option>
                                    <?php } else { ?> 
                                        <option value="Sedans">Sedans</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Hatchbacks" ) { ?>
                                        <option selected  value="Hatchbacks">Hatchbacks</option>
                                    <?php } else { ?> 
                                        <option value="Hatchbacks">Hatchbacks</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Coupe" ) { ?>
                                        <option selected  value="Coupe">Coupe</option>
                                    <?php } else { ?> 
                                        <option value="Coupe">Coupe</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "SUVs" ) { ?>
                                        <option selected  value="SUVs">SUVs</option>
                                    <?php } else { ?> 
                                        <option value="SUVs">SUVs</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Roadsters" ) { ?>
                                        <option selected  value="Roadsters">Roadsters</option>
                                    <?php } else { ?> 
                                        <option value="Roadsters">Roadsters</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Crossovers" ) { ?>
                                        <option selected  value="Crossovers">Crossovers</option>
                                    <?php } else { ?> 
                                        <option value="Crossovers">Crossovers</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Pick-up Trucks" ) { ?>
                                        <option selected  value="Pick-up Trucks">Pick-up Trucks</option>
                                    <?php } else { ?> 
                                        <option value="Pick-up Trucks">Pick-up Trucks</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "MPVs" ) { ?>
                                        <option selected  value="MPVs">MPVs</option>
                                    <?php } else { ?> 
                                        <option value="MPVs">MPVs</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Vans<" ) { ?>
                                        <option selected  value="Vans">Vans</option>
                                    <?php } else { ?> 
                                        <option value="Vans">Vans</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Mini Vans" ) { ?>
                                        <option selected  value="Mini Vans">Mini Vans</option>
                                    <?php } else { ?> 
                                        <option value="Mini Vans">Mini Vans</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Sport" ) { ?>
                                        <option selected  value="Sport">Sport</option>
                                    <?php } else { ?> 
                                        <option value="Sport">Sport</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Compact" ) { ?>
                                        <option selected  value="Compact">Compact</option>
                                    <?php } else { ?> 
                                        <option value="Compact">Compact</option>
                                    <?php } ?>

                                    <?php if ($car['car_bodytype'] == "Supercar" ) { ?>
                                        <option selected  value="Supercar">Supercar</option>
                                    <?php } else { ?> 
                                        <option value="Supercar">Supercar</option>
                                    <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-price">Price</label>
                                <div class="col-sm-3">
                                    <input type="text" name="car-price" value="<?php echo $car['car_price']; ?>" class="form-control"  placeholder="car-price" pattern="[0-9]+" required>
                                </div>
                                <div class="col-md-3">
                                    <select id="car-pricetext" name="car-pricetext" class="form-control" size="1">
                                    <?php if ($car['car_pricetext'] == "Million" ) { ?>
                                        <option selected value="Million">Million</option>
                                    <?php } else { ?> 
                                        <option value="Million">Million</option>
                                    <?php } ?>
                                    <?php if ($car['car_pricetext'] == "Billion" ) { ?>
                                        <option  selected value="Billion">Billion</option>
                                    <?php } else { ?> 
                                        <option value="Billion">Billion</option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- END General Elements Content -->
                        </div>                         
                    
                        <div class="block">
                            <!-- Color Pickers Title -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-passangger">Total Passangger</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-passanggers" name="car-passanggers" value="<?php echo intval($car['car_passangers']); ?>" class="form-control" placeholder="Number Only" required pattern="[0A-9]+">
                                    <span class="help-block">Example 7</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-passangger">Interior Color</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-interiorcolor" name="car-interiorcolor" value="<?php echo $car['car_interiorcolor']; ?>" class="form-control" placeholder="Color Name" required>
                                    <span class="help-block">Example Red</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-passangger">Exterior Color</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-exteriorcolor" name="car-exteriorcolor" value="<?php echo $car['car_exteriorcolor']; ?>" class="form-control" placeholder="Color Name" required>
                                    <span class="help-block">Example Red</span>
                                </div>
                            </div>
                        </div>
                    </div>          
                    <div class="col-md-6">
                        <div class="block">
                            <!-- Color Pickers Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
                                </div>
                                <h2>Engine Specification</h2>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-transmission">Transmission Type</label>
                                <div class="col-md-6">
                                    <select id="car-transmission" name="car-transmission" class="form-control" size="1">
                                    <?php if ($car['car_transmission'] == "Automatic" ) { ?> 
                                        <option selected value="Automatic">Automatic</option>
                                    <?php } else { ?> 
                                        <option value="Automatic">Automatic</option>
                                    <?php } ?>
                                    <?php if ($car['car_transmission'] == "Manual" ) { ?> 
                                        <option selected value="Manual">Manual</option>
                                    <?php } else { ?> 
                                        <option value="Manual">Manual</option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-drivetrain">Drivetrain Type</label>
                                <div class="col-md-6">
                                    <select id="car-drivetrain" name="car-drivetrain" class="form-control" size="1">                                    
                                    <?php if ($car['car_drivetrain'] == "FWD" ) { ?>     
                                        <option selected value="FWD">FWD</option>
                                    <?php } else { ?>  
                                        <optionvalue="FWD">FWD</option>
                                    <?php } ?>                                    
                                    <?php if ($car['car_drivetrain'] == "RWD" ) { ?>     
                                        <option selected value="RWD">RWD</option>
                                    <?php } else { ?>  
                                        <option value="RWD">RWD</option>
                                    <?php } ?>                                    
                                    <?php if ($car['car_drivetrain'] == "4WD" ) { ?>     
                                        <option selected value="4WD">4WD</option>                   
                                    <?php } else { ?> 
                                        <option value="4WD">4WD</option>                   
                                    <?php } ?>                                                     
                                    <?php if ($car['car_drivetrain'] == "AWD" ) { ?>     
                                        <option selected value="AWD">AWD</option>
                                    <?php } else { ?> 
                                        <option value="AWD">AWD</option>
                                    <?php } ?>                                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-drivetrain">Engine</label>
                                <div class="col-sm-6">
                                    <input type="text" name="car-hp" value="<?php echo $car['car_engine']; ?>" class="form-control" required>
                                    <span class="help-block">1460 hp  3.0L  V-6</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-fuel">Fuel</label>
                                <div class="col-md-6">
                                    <select id="car-fuel" name="car-fuel" class="form-control" size="1">
                                    <?php if ($car['car_fuel'] == "Gasoline" ) { ?> 
                                        <option selected value="Gasoline">Gasoline</option>
                                    <?php } else { ?> 
                                        <option value="Gasoline">Gasoline</option>
                                    <?php } ?>
                                    <?php if ($car['car_fuel'] == "Petrol" ) { ?> 
                                        <option selected value="Petrol">Petrol</option>
                                    <?php } else { ?> 
                                        <option value="Petrol">Petrol</option>
                                    <?php } ?>
                                    <?php if ($car['car_fuel'] == "Electric" ) { ?> 
                                        <option selected value="Electric">Electric</option>
                                    <?php } else { ?> 
                                        <option value="Electric">Electric</option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <!-- Color Pickers Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
                                </div>
                                <h2>Description and Minus</h2>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-description">Description</label>
                                <div class="col-md-9">
                                    <textarea id="car-description" name="car-description" value="<?php echo $car['car_description']; ?>" rows="7" class="form-control" placeholder="<?php echo $car['car_description']; ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-minus">Minus</label>
                                <div class="col-md-9">
                                    <textarea id="car-minus" name="car-minus" value="<?php echo $car['car_minus']; ?>" rows="7" class="form-control" placeholder="<?php echo $car['car_minus']; ?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                        </div>
                    </div>    
                        <div class="form-group form-actions">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                            </div>
                        </div>                      
                </form>
                <!-- END of Form for a new car -->
                
                <div class="block full">
                    <!-- Color Pickers Title -->
                    <div class="block-title">
                        <!-- Color Pickers Title -->
                        <div class="block-title">
                            <div class="block-options pull-right">
                                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
                            </div>
                            <h2>Upload Image</h2>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <form action="backend/upload.php?" method="post" enctype="multipart/form-data">
                                    <div class="col-md-9">
                                        <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" required>
                                    </div>                                    
                                    <div class="col-md-3">
                                        <input type="submit" class="btn btn-effect-ripple btn-xl btn-success" value="Upload" name="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['image'])) { ?>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-minus"><?php echo $_SESSION['errorImg']; ?> </label>
                            </div>
                            <?php unset($_SESSION['image']); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane" id="cars-media">  
                <div class="row gallery">
                    <?php  if (mysqli_num_rows($pictures) > 0) {
                    while ($picture = mysqli_fetch_assoc($pictures)) { ?>
                    <div class="col-sm-3">
                        <div class="gallery-image-container animation-fadeInQuick2" data-category="travel">
                            <img src="../<?php echo $picture['pic_path']; ?>" alt="Image">
                            <a href="../<?php echo $picture['pic_path']; ?>" class="gallery-image-options" data-toggle="lightbox-image" title="Image Info">
                                <h2 class="text-light"><strong><?php echo $car['car_maker']; echo " "; echo $car['car_model']; ?></strong></h2>
                                <i class="fa fa-search-plus fa-3x text-light"></i>
                            </a>
                        </div>
                    </div>
                    <?php } } else { ?>
                    <div class="col-sm-3">
                        <div class="gallery-image-container animation-fadeInQuick2" data-category="travel">
                            <img src="img/placeholders/photos/picture.jpg" alt="Image">
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END Get Started Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>


<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsComponents.js"></script>
<script>$(function(){ FormsComponents.init(); });</script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/uiTables.js"></script>
<script>$(function(){ UiTables.init(); });</script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/compCalendar.js"></script>
<script>$(function(){ CompCalendar.init(); });</script>

<?php include 'inc/template_end.php'; ?>