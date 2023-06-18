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

$queryG = "SELECT * FROM custumer";
$custumers = mysqli_query($conn, $queryG);
?>

<!-- Page content -->
<div id="page-content">
    <!-- Blank Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Custumers</h1>
                </div>
            </div>            
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Custumer</li>
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
                <li><a href="#schedules-tables">Show Custumers</a></li>
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
                <form action="backend/custumer.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Full Name</label>
                        <div class="col-md-6">
                            <input type="text" id="form-name" name="form-name" class="form-control" placeholder="Name" required pattern="[A-Za-z\s]+" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-email">Email</label>
                        <div class="col-md-6">
                            <input type="email" id="form-email" name="form-email" class="form-control" placeholder="Email" required pattern="[^ @]*@[^ @]*" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-phone">Phone Number</label>
                        <div class="col-md-6">
                            <input type="text" id="form-phone" name="form-phone" class="form-control" placeholder="Phone" required pattern="[0-9]+" >
                            <span class="help-block">Phone number with integrated Whatsapp account</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="custumer-description">Address</label>
                        <div class="col-md-6">
                            <textarea id="form-address" name="form-address" rows="7" class="form-control" placeholder="Address.."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-phone">Post Code</label>
                        <div class="col-md-6">
                            <input type="text" id="form-phone" name="form-post-code" class="form-control" placeholder="Post Code" pattern="[0-9]+">
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
                <!-- Datatables is initialized in js/pages/uiTables.js -->
                <div class="block full">
                    <div class="block-title">
                        <h2>Custumers</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th style="width: 120px;">Addres</th>
                                    <th>Post Code</th>
                                    <th >Status Verification</th>
                                    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $labels['1']['class'] = "label-success";
                                $labels['1']['text'] = "Yes";
                                $labels['0']['class'] = "label-danger";
                                $labels['0']['text'] = "No";
                                ?>
                                <?php while($show = mysqli_fetch_assoc($custumers)) { ?>
                                <tr>
                                    <td><strong><?php echo $show['cus_name']; ?></strong></td>
                                    <td><?php echo $show['cus_email']; ?></td>
                                    <td><?php echo $show['cus_phone']; ?></td>
                                    <?php if ($show['cus_address'] == ''){ ?>
                                        <td>Not Set </td>
                                    <?php } else { ?>
                                    <td><?php echo $show['cus_address']; ?></td>
                                    <?php } ?>
                                    <?php if ($show['cus_post_code'] == ''){ ?>
                                        <td>Not Set </td>
                                    <?php } else { ?>
                                        <td><?php echo $show['cus_post_code']; ?></td>
                                    <?php } ?>
                                    <td><span class="label<?php echo ($labels[$show['cus_verified']]['class']) ? " " . $labels[$show['cus_verified']]['class'] : ""; ?>"><?php echo $labels[$show['cus_verified']]['text'] ?></span></td>
                                    <td class="text-center">
                                        <a href="#modal-edit-<?php echo $show['cus_id'];?>" data-toggle="modal" title="Edit User" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="#modal-delete-<?php echo $show['cus_id'];?>" data-toggle="modal" title="Delete User" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <!-- Edit Tabs -->
                                <div id="modal-edit-<?php echo $show['cus_id'];?>" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <form action="backend/custumer-update.php?id=<?php echo $show['cus_id'];?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h3 class="modal-title"><strong>Update Data</strong></h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="block">
                                                    <!-- General Elements Content -->
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="example-text-input">Full Name</label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="form-name" value="<?php echo $show['cus_name']; ?>" name="form-name" class="form-control" placeholder="<?php echo $show['cus_name']; ?>" pattern="[A-Za-z\s]+">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="example-email">Email</label>
                                                        <div class="col-md-7">
                                                            <input type="email" id="form-email" value="<?php echo $show['cus_email']; ?>"  name="form-email" class="form-control" placeholder="<?php echo $show['cus_email']; ?>" pattern="[^ @]*@[^ @]*">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="example-phone">Phone Number</label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="form-phone" value="<?php echo $show['cus_phone']; ?>"  name="form-phone" class="form-control" placeholder="<?php echo $show['cus_phone']; ?>" pattern="[0-9]+">
                                                            <span class="help-block">Phone number with integrated Whatsapp account</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="custumer-description">Address</label>
                                                        <div class="col-md-7">
                                                            <textarea id="form-address" value="<?php echo $show['cus_address']; ?>"  name="form-address" rows="7" class="form-control" placeholder="<?php echo $show['cus_address']; ?>"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="example-phone">Post Code</label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="form-post-code" value="<?php echo $show['cus_post_code']; ?>"  name="form-post-code" class="form-control" placeholder="<?php echo $show['cus_post_code']; ?>" pattern="[0-9]+">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END General Elements Content -->
                                            <div class="modal-footer">
                                                <button type="submit"  class="btn btn-effect-ripple btn-primary">Save</button>
                                                <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Edit Tabs -->      

                                <!-- Delete Modal -->
                                <div id="modal-delete-<?php echo $show['cus_id'];?>" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Confirm deleting "<?php echo $show['cus_name']; ?>"
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-effect-ripple btn-primary">Yes</button>
                                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Delete Modal -->
                                <?php } ?>
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