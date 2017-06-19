
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <?= $sidebar;?>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">

            <!-- BEGIN PAGE HEAD-->
            <?=$page_head; ?>
            <!-- END PAGE HEAD-->

            <!-- BEGIN PAGE BREADCRUMB -->
            <?=$breadcrumb; ?>
            <!-- END PAGE BREADCRUMB -->

            <!-- BEGIN PAGE BASE CONTENT -->
            <?= $content; ?>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

    <!-- BEGIN QUICK SIDEBAR -->
    <?=$quick_sidebar; ?>
    <!-- END QUICK SIDEBAR -->

</div>
<!-- END CONTAINER -->
