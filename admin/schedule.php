<?php 
include('../connection.php');
session_start();
if (!isset($_SESSION['admin-name'])){
    $_SESSION['Ahistory'] = "../email.php";
    header("Location: login.php");
}
?>
<?php include 'inc/config.php'; $template['header_link'] = 'Schedule'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php
$queryA = "SELECT emp_eid, emp_name, emp_phone, emp_status FROM employees";
$employees = mysqli_query($conn, $queryA);
$queryB = "SELECT * FROM cars LIMIT 10";
$cars = mysqli_query($conn, $queryB);
$queryC = "SELECT * FROM employees";
$calendar = mysqli_query($conn, $queryC);


$queryD = " SELECT * FROM cars";
$formCars = mysqli_query($conn, $queryD);
$queryE = "SELECT * FROM employees WHERE emp_status = 'Available'";
$formEmployees = mysqli_query($conn, $queryE);
$queryF = " SELECT * FROM timeschedule";
$formTimes = mysqli_query($conn, $queryF);
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
                <li class="active"><a href="#schedules-form">Add New</a></li>
                <li><a href="#schedules-tables">Show Available</a></li>
                <li><a href="#schedules-calendar">Calendar</a></li>
            </ul>
        </div>
        <!-- END Schedule Tabs -->

        <div class="tab-content">
            <!-- Forum -->
            <div class="tab-pane active" id="schedules-form"><!-- General Elements Block -->
            <div class="block">
                <!-- General Elements Title -->
                <div class="block-title">
                    <h2>General Elements</h2>
                </div>
                <!-- END General Elements Title -->

                <!-- General Elements Content -->
                <form action="backend/schedule.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Full Name</label>
                        <div class="col-md-6">
                            <input type="text" id="form-name" name="form-name" class="form-control" placeholder="Name" required pattern="[A-Za-z\s]+">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-email">Email</label>
                        <div class="col-md-6">
                            <input type="email" id="form-email" name="form-email" class="form-control" placeholder="Email" required pattern="[^ @]*@[^ @]*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-phone">Phone Number</label>
                        <div class="col-md-6">
                            <input type="text" id="form-phone" name="form-phone" class="form-control" placeholder="Phone" required pattern="[0-9]+">
                            <span class="help-block">Phone number with integrated Whatsapp account</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select2">Car</label>
                        <div class="col-md-5">
                            <select id="form-car" name="form-car" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." required>
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin --> 
                                <?php  if (mysqli_num_rows($formCars) > 0) { 
                                    while ($formCar = mysqli_fetch_assoc($formCars)) { ?>
                                <option value="<?php echo $formCar['car_id'];?>"><?php echo $formCar['car_maker']; echo " ";echo $formCar['car_model']; echo " ";echo $formCar['car_year'];?></option>
                                <?php }} else { ?>
                                    <option value="">No Available Car</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select2">Employee</label>
                        <div class="col-md-5">
                            <select id="form-time" name="form-time" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." required>
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin --> 
                                <?php  if (mysqli_num_rows($formEmployees) > 0) { 
                                    while ($formEmployee = mysqli_fetch_assoc($formEmployees)) { ?>
                                <option value="<?php echo $formEmployee['emp_id'];?>"><?php echo $formEmployee['emp_name'];?></option>
                                <?php }} else { ?>
                                    <option value="">Fully Booked</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Time</label>
                        <div class="col-md-6">
                            <select id="form-emp" name="form-emp" class="form-control" size="1" required>
                                <?php  if (mysqli_num_rows($formTimes) > 0) { 
                                    while ($formTime = mysqli_fetch_assoc($formTimes)) { ?>
                                    <option value="<?php echo $formTime['tmsch_id'];?>"><?php echo $formTime['tmsch_time'];?></option>
                                <?php }} else { ?>
                                    <option value="">Fully Booked</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END General Elements Content -->
            </div>
            <!-- END General Elements Block -->

            </div>
            <div class="tab-pane" id="schedules-tables">  
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Partial Responsive Block -->
                        <div class="block">
                            <!-- Partial Responsive Title -->
                            <div class="block-title">
                                <h2>Vehicle</h2>
                            </div>
                            <!-- END Partial Responsive Title -->

                            <!-- Partial Responsive Content -->
                            <table class="table table-striped table-borderless table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Maker</th>
                                        <th class="hidden-xs">Model</th>
                                        <th class="hidden-xs">Year</th>
                                        <th class="hidden-sm hidden-xs">Status</th>
                                        <th style="width: 80px;" class="text-center"><i class="fa fa-flash"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $labels['AVAILABLE']['class'] = "label-success";
                                    $labels['WAITING']['class'] = "label-info";
                                    $labels['SOLD']['class'] = "label-danger";
                                    $labels['RENTED']['class'] = "label-warning";
                                    ?>
                                    <?php if (mysqli_num_rows($cars) > 0) {
                                    while($car = mysqli_fetch_assoc($cars)) {
                                    ?>
                                    <tr>
                                        <td><strong><?php echo $car['car_maker']; ?></strong></td>
                                        <td class="hidden-xs"><?php echo $car['car_model']; ?> </td>
                                        <td class="hidden-xs"><?php echo $car['car_year']; ?>   </td>
                                        <td class="hidden-sm hidden-xs">
                                            <a href="javascript:void(0)" class="label<?php echo ($labels[$car['car_status_shop']]['class']) ? " " . $labels[$car['car_status_shop']]['class'] : ""; ?>">
                                            <?php echo $car['car_status_shop']?>
                                        </td>
                                        <td class="text-center">
                                            <a href="#modal-tabs" class="btn btn-effect-ripple btn-primary" data-toggle="modal">More..</a>
                                        </td>
                                        
                                        <!-- Regular Tabs -->
                                        <div id="modal-tabs" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header-tabs">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                                            <li class="active"><a href="#modal-tabs-home"><i class="fa fa-home"></i> Home</a></li>
                                                            <li><a href="#modal-tabs-settings" data-toggle="tooltip" title="Settings"><i class="gi gi-settings"></i> Settings</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="modal-tabs-home">Schedule</div>
                                                            <div class="tab-pane" id="modal-tabs-settings">Schedule</div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-effect-ripple btn-primary">Save</button>
                                                        <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Regular Tabs -->                                        
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                            </table>
                            <!-- END Partial Responsive Content -->
                                                       
                        </div>
                        <!-- END Partial Responsive Block -->
                    </div>
                    <div class="col-lg-6">
                            <!-- Partial Responsive Block -->
                        <div class="block">                        
                            <div class="block-title">
                                <h2>Available Employees</h2>
                            </div>
                            <div class="table-responsive">
                                <table id="employees-datatable" class="table table-vcenter display compact">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">EID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                            <th style="width: 120px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (mysqli_num_rows($employees) > 0) {
                                    while($employee = mysqli_fetch_assoc($employees)) {
                                    ?>
                                        <?php
                                        $labels['0']['class'] = "label-success";
                                        $labels['0']['text'] = "Available";
                                        $labels['1']['class'] = "label-danger";
                                        $labels['1']['text'] = "Resting";
                                        ?>
                                        
                                        <tr>
                                            <td  class="text-center"><?php echo $employee['emp_eid']; ?></td>
                                            <td class="text-center"><?php echo $employee['emp_name']; ?></td>
                                            <td class="hidden-xs"><?php echo $employee['emp_phone']; ?></td>
                                            <td class="hidden-sm hidden-xs"><span class="label<?php echo ($labels[$employee['emp_status']]['class']) ? " " . $labels[$employee['emp_status']]['class'] : ""; ?>"><?php echo $labels[$employee['emp_status']]['text'] ?></span></td>
                                        </tr>
                                        <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Partial Responsive Block -->
                        </div>
                    </div>
                </div>
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
                                    <th class="text-center" style="width: 50px;">ID</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Car</th>
                                    <th style="width: 120px;">Status</th>
                                    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $labels['0']['class'] = "label-success";
                                $labels['0']['text'] = "Availablee";
                                $labels['1']['class'] = "label-info";
                                $labels['1']['text'] = "Fully Booked";
                                $labels['2']['class'] = "label-danger";
                                $labels['2']['text'] = "Cancel";
                                $labels['3']['class'] = "label-warning";
                                $labels['3']['text'] = "Pending..";
                                ?>
                                <?php for($i=1; $i<31; $i++) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $i; ?></td>
                                    <td><strong>AppUser<?php echo $i; ?></strong></td>
                                    <td>app.user<?php echo $i; ?>@example.com</td>
                                    <td><?php echo $rand = rand(181200000000, 182299999999); ?></td>
                                    <td>Car </td>
                                    <?php $rand = rand(0, 3); ?>
                                    <td><span class="label<?php echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text'] ?></span></td>
                                    <td class="text-center">
                                        <a href="#modal-edit" data-toggle="modal" title="Edit User" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="#modal-delete-" data-toggle="modal" title="Delete User" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                                <!-- Edit Tabs -->
                                <div id="modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header-tabs">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <ul class="nav nav-tabs" data-toggle="tabs">
                                                    <li class="active"><a href="#modal-tabs-home"><i class="fa fa-home"></i> Home</a></li>
                                                    <li><a href="#modal-tabs-settings" data-toggle="tooltip" title="Settings"><i class="gi gi-settings"></i> Settings</a></li>
                                                </ul>
                                            </div>
                                            <div class="modal-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="modal-tabs-home">Schedule</div>
                                                    <div class="tab-pane" id="modal-tabs-settings">Schedule</div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-effect-ripple btn-primary">Save</button>
                                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Edit Tabs -->      

                                <!-- Delete Modal -->
                                <div id="modal-delete-" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
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
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Datatables Block -->
            </div>
            <div class="tab-pane" id="schedules-calendar">
                    <!-- FullCalendar Block -->
                    <div class="block full">
                        <div class="row">
                            <div class="col-md-3 col-md-push-9 col-lg-2 col-lg-push-10">
                                <div class="block-section">
                                    <!-- Add event functionality (initialized in js/pages/compCalendar.js) -->
                                    <form>
                                        <div class="input-group">
                                            <input type="text" id="add-event" name="add-event" class="form-control" placeholder="What to do?">
                                            <div class="input-group-btn">
                                                <button type="submit" id="add-event-btn" class="btn btn-effect-ripple btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="block-section">
                                    <ul class="calendar-events">
                                        <?php  if (mysqli_num_rows($calendar) > 0) { 
                                            while ($cal= mysqli_fetch_assoc($calendar)) { 
                                            if ($cal['emp_status'] != 0 ) {?>
                                                <li class="themed-background-danger"><i class="fa fa-calendar"></i><?php echo $cal['emp_name']; ?></li>
                                            <?php } else { ?>
                                                <li class="themed-background-success"><i class="fa fa-calendar"></i><?php echo $cal['emp_name']; ?></li>
                                            <?php } ?>
                                        <?php }} ?>
                                    </ul>
                                    <div class="block-section text-center text-muted">
                                        <small><i class="fa fa-arrows"></i> Drag and Drop Events</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-md-pull-3 col-lg-10 col-lg-pull-2">
                                <!-- FullCalendar (initialized in js/pages/compCalendar.js), for more info and examples you can check out http://arshaw.com/fullcalendar/ -->
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- END FullCalendar Block -->
            </div>
        </div>
    </div>
    <!-- END Get Started Block -->
</div>
<!-- END Page Content -->



<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<script> 
    $(document).ready(function() {
        $('table.display').DataTable({
            lengthMenu: [[5, 10, 20], [5, 10, 20]],
            "sDom": "<'row'<'col-sm-6 col-xs-5'l><'col-sm-6 col-xs-7'f>r>t<'row'<'col-sm-5 hidden-xs'i><'col-sm-7 col-xs-12 clearfix'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_",
                "sSearch": "<div class=\"input-group\">_INPUT_<span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span></div>",
                "sInfo": "<strong>_START_</strong>-<strong>_END_</strong> of <strong>_TOTAL_</strong>",
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            },
            "sWrapper": "dataTables_wrapper form-inline",
            "sFilterInput": "form-control",
            "sLengthSelect": "form-control"
        });
    });
</script>
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