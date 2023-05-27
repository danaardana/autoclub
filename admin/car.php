<?php
include('../connection.php');
session_start();
if (!isset($_SESSION['admin-name'])){
    $_SESSION['Ahistory'] = "../car.php";
    header("Location: login.php");
}

?>
<?php include 'inc/config.php'; $template['header_link'] = 'CAR'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<?php
$queryA = "SELECT emp_eid, emp_name, emp_phone, emp_status FROM employees LIMIT 10";
$employees = mysqli_query($conn, $queryA);
$queryB = "SELECT * FROM cars LIMIT 10";
$cars = mysqli_query($conn, $queryB);

?>


<!-- Page content -->
<div id="page-content">
    <!-- Blank Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Schedule</h1>
                </div>
            </div>            
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Test Drive</li>
                        <li><a href="">Schedule</a></li>
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
                <li class="active"><a href="#cars-form">Add New</a></li>
                <li><a href="#cars-tables">Show Available</a></li>
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
                                        <option></option><!-- requiredd for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="Ford">Ford</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Honda">Honda</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Tesla">Tesla</option>
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Land Rover">Land Rover</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Volkswagen">Volkswagen</option>
                                        <option value="Lexus">Lexus</option>
                                        <option value="Porsche">Porsche</option>
                                        <option value="Mini">Mini</option>
                                        <option value="Mazda">Mazda</option>
                                        <option value="Aston Martin">Aston Martin</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Alfa Romeo">Alfa Romeo</option>
                                        <option value="Renault">Renault</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Fiat">Fiat</option>
                                        <option value="Jeep">Jeep</option>
                                        <option value="Kia">Kia</option>
                                        <option value="Dodge">Dodge</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-model">Model</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-model" name="car-model" class="form-control" placeholder="Car Model" required>
                                    <span class="help-block">Example Fortuner</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-year">Year</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-year" name="car-year" class="form-control" placeholder="Number Only" pattern="[0-9]+" required>
                                    <span class="help-block">Example 2014</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-status">Status</label>
                                <div class="col-md-6">
                                    <select id="car-status" name="car-status" class="form-control" size="1">
                                        <option selected value="Brand New">Brand New</option>
                                        <option value="Second">Second</option>
                                        <option value="Rental">Rental</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-km">KM</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-km" name="car-km" class="form-control" placeholder="Number Only" pattern="[0-9]+" required>
                                    <span class="help-block">Example 74000</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-bodytype">Body Type</label>
                                <div class="col-md-6">
                                    <select id="car-bodytype" name="car-bodytype" class="form-control" size="1">
                                        <option value="Sedans">Sedans</option>
                                        <option value="Hatchbacks">Hatchbacks</option>
                                        <option value="Coupe">Coupe</option>
                                        <option value="SUVs">SUVs</option>
                                        <option value="Roadsters">Roadsters</option>
                                        <option value="Crossovers">Crossovers</option>
                                        <option value="Pick-up Trucks">Pick-up Trucks</option>
                                        <option value="MPVs">MPVs</option>
                                        <option value="Vans">Vans</option>
                                        <option value="Mini Vans">Mini Vans</option>
                                        <option value="Sport">Sport</option>
                                        <option value="Compact">Compact</option>
                                        <option value="Supercar">Supercar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-price">Price</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="car-price" placeholder="car-price" pattern="[0-9]+" required>
                                </div>
                                <div class="col-md-3">
                                    <select id="car-pricetext" name="car-pricetext" class="form-control" size="1">
                                        <option selected value="Million">Million</option>
                                        <option value="Billion">Billion</option>
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
                                    <input type="text" id="car-passanggers" name="car-passanggers" class="form-control" placeholder="Number Only" required pattern="[0A-9]+">
                                    <span class="help-block">Example 7</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-passangger">Interior Color</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-interiorcolor" name="car-interiorcolor" class="form-control" placeholder="Color Name" required>
                                    <span class="help-block">Example Red</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-passangger">Exterior Color</label>
                                <div class="col-md-6">
                                    <input type="text" id="car-exteriorcolor" name="car-exteriorcolor" class="form-control" placeholder="Color Name" required>
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
                                        <option selected value="Automatic">Automatic</option>
                                        <option value="Manual">Manual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-drivetrain">Drivetrain Type</label>
                                <div class="col-md-6">
                                    <select id="car-drivetrain" name="car-drivetrain" class="form-control" size="1">
                                        <option selected value="FWD">FWD</option>
                                        <option value="RWD">RWD</option>
                                        <option value="4WD">4WD</option>
                                        <option value="AWD">AWD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-drivetrain">Engine</label>
                                <div class="col-sm-2">
                                    <input type="text" name="car-hp" class="form-control" placeholder="2500" pattern="[0-9]+" required>
                                </div>
                                <div class="col-sm-1">
                                    <p class="form-control-static">HP</p> 
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="car-liter" class="form-control" placeholder="4" pattern="[0-9]+" required>
                                </div>
                                <div class="col-sm-1">
                                    <p class="form-control-static">L</p>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="car-v" class="form-control" placeholder="6" pattern="[0-9]+" required> 
                                </div>
                                <div class="col-sm-1">
                                    <p class="form-control-static">V-</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-fuel">Fuel</label>
                                <div class="col-md-6">
                                    <select id="car-fuel" name="car-fuel" class="form-control" size="1">
                                        <option selected value="Gasoline">Gasoline</option>
                                        <option value="Petrol">Petrol</option>
                                        <option value="Electric">Electric</option>
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
                                    <textarea id="car-description" name="car-description" rows="7" class="form-control" placeholder="Description.."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-minus">Minus</label>
                                <div class="col-md-9">
                                    <textarea id="car-minus" name="car-minus" rows="7" class="form-control" placeholder="Description.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-9">
                                        <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" required>
                                    </div>                                    
                                    <div class="col-md-3">
                                        <input type="submit" class="btn btn-effect-ripple btn-xl btn-success" value="Upload" name="submit">
                                    </div>
                                </div>
                            </div>
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
                        <h2> </h2>
                        <?php if (isset($_SESSION['image'])) { ?>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="car-minus"><?php echo $_SESSION['errorImg']; ?> </label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane" id="cars-tables">  
                <!-- Datatables Block -->
                <!-- Datatables is initialized in js/pages/uiTables.js -->
                <div class="block full">
                    <div class="block-title">
                        <h2>Schedules</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">Maker</th>
                                    <th>Model</th>
                                    <th>Year</th>
                                    <th>Body Type</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th style="width: 120px;">Status</th>
                                    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $labels['AVAILABLE']['class'] = "label-success";
                                $labels['AVAILABLE']['TExt'] = "Available";
                                $labels['WAITING']['class'] = "label-info";
                                $labels['SOLD']['class'] = "label-danger";
                                $labels['RENTED']['class'] = "label-warning";
                                ?>
                                <?php if (mysqli_num_rows($cars) > 0) {
                                while($car = mysqli_fetch_assoc($cars)) {    
                                    $price = intval($car['car_price']);
                                    switch ($car['car_pricetext']){
                                        case "Million": $price = $price * 1000000; break;
                                        case "Billion": $price = $price * 1000000000; break;
                                    } 
                                ?>
                                <tr>
                                    <td class="text-center"><strong><?php echo $car['car_maker']; ?></strong></td>
                                    <td><?php echo $car['car_model']; ?></td>
                                    <td><?php echo $car['car_year']; ?></td>
                                    <td><?php echo $car['car_bodytype']; ?></td>
                                    <td><?php echo $car['car_status']; ?></td>
                                    <td><?php echo number_format($price); ?></td>
                                    <td><span class="label<?php echo ($labels[$car['car_status_shop']]['class']) ? " " . $labels[$car['car_status_shop']]['class'] : ""; ?>"><?php echo $car['car_status_shop']?></span></td>
                                    <td class="text-center">
                                        <a href="#modal-view-<?php echo $car['car_id']; ?>" data-toggle="modal" title="View" class="btn btn-effect-ripple btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="edit.php?id=<?php echo $car['car_id']; ?>" title="Edit" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="#modal-delete-<?php echo $car['car_id']; ?>" data-toggle="modal" title="Delete" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </td>     
                                    
                                    
                                    <!-- View Modal -->
                                    <div id="modal-view-<?php echo $car['car_id']; ?>" class="modal small" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    You will directed to view <?php echo $car['car_maker']; echo ' ' ; echo $car['car_model']; echo ' ' ; echo $car['car_year']; ?></td>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="../detail.php?id=<?php echo $car['car_id']; ?>" data-toggle="modal" title="View" target="_blank" class="btn btn-effect-ripple btn-xl btn-success">Yes</i></a>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END View Modal -->

                                    <!-- Delete Modal -->
                                    <div id="modal-delete-<?php echo $car['car_id']; ?>" class="modal small" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    Confirm deleting <?php echo $car['car_maker']; echo ' ' ; echo $car['car_model']; echo ' ' ; echo $car['car_year']; ?></td>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-effect-ripple btn-primary">Yes</button>
                                                    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Delete Modal -->

                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Datatables Block -->
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