<?php
include('../connection.php');
session_start();
if (!isset($_SESSION['admin-name'])){
    $_SESSION['Ahistory'] = "../employees.php";
    header("Location: login.php");
}
?>
<?php include 'inc/config.php'; $template['header_link'] = 'Employees'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<?php 
$queryA = "SELECT * FROM employees";
$employees = mysqli_query($conn, $queryA);

?>
<!-- Page content -->
<div id="page-content">
    <!-- Contacts Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Contacts</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Extra Pages</li>
                        <li><a href="">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center border-top push-inner-top-bottom employees-filter">
            <a href="#modal-add-contact" class="btn btn-sm btn-success" data-toggle="modal"><i class="fa fa-plus"></i></a>
            <div class="btn-group gallery-filter">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary active" data-category="all">All</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="A">A</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="B">B</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="C">C</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="D">D</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="E">E</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="F">F</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="G">G</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="H">H</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="I">I</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="J">J</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="K">K</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="L">L</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="M">M</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="N">N</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="O">O</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="P">P</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="Q">Q</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="R">R</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="S">S</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="T">T</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="U">U</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="V">V</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="W">W</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="X">X</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="Y">Y</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-category="Z">Z</a>
            </div>
        </div>
    </div>
    <!-- END Contacts Header -->

    <!-- Contacts Content -->
    <div class="row employee">
        <?php  if (mysqli_num_rows($employees) > 0) { 
            while ($employee = mysqli_fetch_assoc($employees)) { ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content text-right clearfix" data-category="<?php echo substr($employee['emp_name'],0,1); ?>" >
                    <img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar pull-left">
                    <h3 class="widget-heading h4"><strong><?php echo $employee['emp_name']; ?></strong></h3>
                    <span class="text-muted"><?php echo $employee['emp_position']; ?></span>
                </div>
            </a>
        </div>
        <?php }} else { ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content text-right clearfix">
                    <h3 class="widget-heading h4"><strong>Data not found</strong></h3>
                </div>
            </a>
        </div>
        <?php } ?>
        
    </div>
    <!-- END Contacts Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>

<!-- Add Contact Modal -->
<div id="modal-add-contact" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title"><i class="fa fa-plus"></i> <strong>New Contact</strong></h3>
            </div>
            <div class="modal-body">
                <form action="page_ready_contacts.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-xs-3 control-label text-muted">NO AVATAR</label>
                        <div class="col-xs-9">
                            <i class="fa fa-fw fa-upload"></i> <a href="javascript:void(0)">Upload New Avatar</a><br>
                            <i class="fa fa-fw fa-picture-o"></i> <a href="javascript:void(0)">Choose from Library</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-name">Name</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-name" name="add-contact-name" class="form-control" placeholder="Enter Full Name..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-email">Email</label>
                        <div class="col-xs-9">
                            <input type="email" id="add-contact-email" name="add-contact-email" class="form-control" placeholder="Enter Email..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-phone">Phone</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-phone" name="add-contact-phone" class="form-control" placeholder="(000) 000-0000">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-mobile">Mobile</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-mobile" name="add-contact-mobile" class="form-control" placeholder="Enter Mobile Number..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-address">Address</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-address" name="edit-contact-address" class="form-control" placeholder="Enter Address..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-group">Group</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-group" name="add-contact-group" class="input-tags" value="All Contacts">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-success">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Add Contact Modal -->
<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/compEmployees.js"></script>
<script>$(function(){ CompEmployees.init(); });</script>

<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>