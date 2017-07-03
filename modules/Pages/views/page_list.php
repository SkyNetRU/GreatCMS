
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Plugin Lists
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">

                        <tbody>
                        <?php
                        if($pages) {
                            foreach ($pages as $page) {
                                ?>
                                <tr>
                                    <td>
                                        <div class="pull-right">
                                            <a class="btn btn-primary" href="<?php echo site_url('Pages/show_text/'.$page->id) ?>" target="_blank">Preview</a>
                                            <a class="btn btn-primary" href="<?php echo site_url('Pages/edit_page/' . $page->id) ?>">Edit Page</a>
                                            <a class="btn btn-primary" href="<?php echo site_url('Pages/delete_page/' . $page->id) ?>" class="dropdown-item" onclick="if(!confirm('Are you sure you want to delete this page?')){ return false; }">Delete Page</a>
                                        </div>
                                        <div id="1" class="item-title">
                                            <a id="user_d" class="_500"
                                               href="#"> <?php echo $page->title ?></a>
                                        </div>
                                        <small  class="block text-muted text-ellipsis"> <?php //echo $page->content ?> </small>
                                    </td>
                                </tr>
                            <?php }
                        }else {?>
                            <div class="alert alert-info">There are no pages yet, let's create new one.</div>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

        $('.trigger').windoze();

    });
</script>
