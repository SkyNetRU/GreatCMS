<div class="container-fluid nopadding">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-puzzle"></i>
                        <span class="caption-subject bold uppercase"> Modules List</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-toolbar" id="toolbar-btns">
                                    <div class="btn-wrapper" id="toolbar-save">
                                        <a data-toggle="modal" href="#select_modules">
                                            <button type="button" class="btn btn-success">
                                                <i class="fa fa-plus" aria-hidden="true"></i> New
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                           id="modules">
                        <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#modules .checkboxes"/>
                                    <span></span>
                                </label>
                            </th>
                            <th> ID</th>
                            <th> Title</th>
                            <th> Type</th>
                            <th> Created</th>
                            <th> Last Edited</th>
                            <th> Status</th>
                            <th> Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <? foreach ($modules as $module) {
                            if ($module->published) {
                                $label_type = 'success';
                                $label_text = 'Published';
                                $action = 'Unpublish';
                                $action_icon = 'ban';
                                $data_publ = true;
                            } else {
                                $label_type = 'danger';
                                $label_text = 'Unpublished';
                                $action = 'Publish';
                                $action_icon = 'check';
                                $data_publ = false;
                            }; ?>
                            <tr class="odd gradeX" data-module_id="<?= $module->id; ?>" data-published="<?=$data_publ;?>">
                                <td>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1"/>
                                        <span></span>
                                    </label>
                                </td>
                                <td> <?= $module->id; ?> </td>
                                <td> <?= $module->title; ?> </td>
                                <td> <?= $module->name; ?> </td>
                                <td> <?= $module->created; ?> </td>
                                <td> <?= $module->last_modified ? $module->last_modified : 'not edited'; ?> </td>
                                <td>
                                    <span class="label label-sm label-<?= $label_type; ?>"> <?= $label_text; ?> </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-pencil"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" onclick="ChangeModuleStatus (this)">
                                                    <i class="icon-<?= $action_icon; ?>"></i> <?= $action; ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" onclick="DeleteModule (this)">
                                                    <i class="icon-trash"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <? } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>



<!--Column Settings Modal-->
<div class="modal fade" id="select_modules" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header font-white bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Select module type</h4>
            </div>

            <div class="modal-body nopadding-all">
                <div class="portlet light portlet-fit no-margin">
                    <div class="portlet-body nopadding-all-force">
                        <div class="mt-element-list">
                            <div class="mt-list-container list-simple ext-1 no-border-bottom">
                                <ul>
                                    <? foreach ($extensions as $extension) { ?>
                                        <li class="mt-list-item no-border-side-force">
                                            <div class="list-item-content nopadding-all-force">
                                                <h3 class="uppercase">
                                                    <a href="/gc-admin/modules/create/<?= $extension->id; ?>"><?= $extension->title; ?></a>
                                                </h3>

                                                <p><?= $extension->description; ?></p>
                                            </div>
                                        </li>
                                    <? } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--END Column Settings Modal-->

<script>
    var token_name = '<?=$csrf['name'];?>';
    var hash = '<?=$csrf['hash'];?>';

    $(document).ready(function () {
        TableDatatablesManaged.init();
    });

    function DeleteModule (el) {
        var data = {};
        data[token_name] = hash;
        data.module_id = $(el).closest('tr').data('module_id');
        var url = '/gc-admin/modules/trash_module_ajax';

        var html = $.ajax({
            type: "POST",
            dataType: 'json',
            data: data,
            url: url,
            success: function(jsondata){
                if (jsondata.result){
                    toastr.success("Module deleted", "Success");
                    $(el).closest('tr').remove();
                    hash = jsondata.hash;
                } else {
                    toastr.error("Some Error there", "Error");
                }
            }
        });
    }


    function ChangeModuleStatus (el) {
        var data = {};
        data[token_name] = hash;
        data.status = $(el).closest('tr').data('published');
        data.module_id = $(el).closest('tr').data('module_id');
        var url = '/gc-admin/modules/change_status_module_ajax';

        var html = $.ajax({
            type: "POST",
            dataType: 'json',
            data: data,
            url: url,
            success: function(jsondata){
                if (jsondata.result){
                    if (data.status){
                        toastr.success("Module unpublished", "Success");
                        $(el).closest('tr').data('published', 0);
                        $(el).html('<i class="icon-check"></i> Publish');
                        //$(el).find('li').removeClass('icon-ban').addClass('icon-check')
                        $(el).closest('tr').find('td span.label.label-sm').removeClass('label-success').addClass('label-danger').text('Unpublished');
                    } else {
                        toastr.success("Module published", "Success");
                        $(el).closest('tr').data('published', 1);
                        //$(el).text('Unpublish');
                        $(el).html('<i class="icon-ban"></i> Unpublish');
                        //$(el).find('li').removeClass('icon-check').addClass('icon-ban')
                        $(el).closest('tr').find('td span.label.label-sm').removeClass('label-danger').addClass('label-success').text('Published');
                    }
                    hash = jsondata.hash;
                } else {
                    toastr.error("Some Error there", "Error");
                }
            }
        });
    }
</script>


