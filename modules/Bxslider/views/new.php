<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="col-md-12 nopadding">
                <div class="btn-toolbar" id="toolbar-btns">
                    <div class="btn-wrapper" id="toolbar-save">
                        <button type="button" onclick="SaveModule ()" class="btn btn-success">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                        </button>
                    </div>

                    <div class="btn-wrapper" id="toolbar-save">
                        <button type="button" onclick="SaveAndClose ()" class="btn btn-success">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> Save and Close
                        </button>
                    </div>

                    <div class="btn-wrapper" id="toolbar-cancel">
                        <button type="button" onclick="window.location.replace('/gc-admin/modules')" class="btn btn-danger">
                            <i class="fa fa-window-close" aria-hidden="true"></i> Close
                        </button>
                    </div>
                </div>
            </div>

            <div class="portlet-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#settings" data-toggle="tab" aria-expanded="true"> Module Settings </a>
                    </li>
                    <li class="">
                        <a href="#sliders" data-toggle="tab" aria-expanded="false"> Sliders </a>
                    </li>
                    <li class="">
                        <a href="#preview" data-toggle="tab" aria-expanded="false"> Preview </a>
                    </li>
                </ul>
                <?
                $attributes = array('class' => 'form-horizontal', 'id' => 'module_create', 'role' =>'form' );
                echo form_open("/gc-admin/modules/save/".$id.'/', $attributes); ?>
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="settings">
                                <div class="form-group">
                                    <label class="control-label ">Title*</label>
                                    <div class="col-md-6">
                                        <input type="text" data-required="1" required name="title" class="form-control" placeholder="Enter title">
                                        <span class="help-block"> Module must have a title. </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Show Title</label>
                                    <div class="col-md-6">
                                        <input type="checkbox" checked data-on-color="success"  data-off-color="danger" class="make-switch" id="title_show" name="title_show" data-size="small">
                                        <span class="help-block"> Show or hide module title on display. </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Note</label>
                                    <div class="col-md-6">
                                        <input type="text" name="note" class="form-control" placeholder="Enter note">
                                        <span class="help-block"> An optional note to display in the Module Manager. </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <div class="col-md-6">
                                        <select class="bs-select form-control input-small" name="status" data-style="btn-success">
                                            <option value="1" data-style="btn-success">Published</option>
                                            <option value="0" data-style="btn-danger">Unpublished</option>
                                            <option value="-1" data-style="btn-danger">Trashed</option>
                                        </select>
                                        <span class="help-block"> If published, this module will display on your site Frontend. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sliders">
                                <a href="javascript:;" onclick="AddSlide ()" class="btn green"> Add Slide
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="panel-group accordion" id="accordion1">

                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview">
                                <ul class="bxslider">
                                </ul>
                            </div>
                        </div>
                    </div>
                <input type="hidden" name="action" value="">
                </form>
            </div>
        </div>
    </div>
</div>

<div id="media_manager" class="modal fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Media manager</h4>
            </div>
            <div class="modal-body">
                <div class="row iframe">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var slider;
    $(document).ready(function () {
        $('.bs-select').change(function () {
            if ($(this).prop("tagName") == 'SELECT'){
                var style = $(this).find('option[value="' + $(this).val() + '"]').data('style');
                $(this).closest('.bs-select').selectpicker('setStyle', 'btn-danger', 'remove');
                $(this).closest('.bs-select').selectpicker('setStyle', 'btn-success', 'remove');
                $(this).closest('.bs-select').selectpicker('setStyle', style);
            }
        });


        var active = false,
            sorting = false;
        $( "#accordion1" )
                .accordion({
                    header: "> div > h4",
                    collapsible: true,
                    activate: function( event, ui){
                        //this fixes any problems with sorting if panel was open (remove to see what I am talking about)
                        if(sorting)
                            $(this).sortable("refresh");
                    }
                })
            .sortable({
                handle: "h4",
                placeholder: "ui-state-highlight",
                start: function( event, ui ){
                    //change bool to true
                    sorting=true;

                    //find what tab is open, false if none
                    active = $(this).accordion( "option", "active" );

                    //possibly change animation here
                    $(this).accordion( "option", "animate", { easing: 'swing', duration: 0 } );

                    //close tab
                    $(this).accordion({ active:false });
                },
                stop: function( event, ui ) {
                    ui.item.children( "h3" ).triggerHandler( "focusout" );

                    //possibly change animation here; { } is default value
                    $(this).accordion( "option", "animate", { } );

                    //open previously active panel
                    $(this).accordion( "option", "active", active );

                    //change bool to false
                    sorting=false;
                }
            });

        AddActions ();
        slider = $('.bxslider').bxSlider();



        $('.portlet-body a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            if ($(e.target).attr('href') == '#preview'){
                slider.reloadSlider();
            }
        })

        FormValidation.init();
    });

    function AddSlide () {
        var i = 1;
        while ($('.panel.panel-default[data-id="'+i+'"]').length > 0){
            i++
        }

        var panel = '<div class="panel panel-default" data-id="'+ i +'">' +
            '<div class="panel-heading">' +
            '<h4 class="panel-title">' +
            '<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_'+ i +'" aria-expanded="false"> Slide </a>' +
            '<div class="accordion-delete">' +
            '<a href="javascript:;" class="btn btn-icon-only red">'+
            '<i class="fa fa-times"></i>'+
            '</a>' +
            '</div>' +
            '</h4>' +
            '</div>' +
            '<div id="collapse_'+ i +'"  class="panel-collapse collapse" aria-expanded="false">' +
            '<div class="panel-body">' +
            '<img class="gm-media-preview no-image slide_image" alt="">'+
            '<input type="hidden" name="params[slides][]" class="input-media" value="">'+
            '<a class="btn btn-primary slide_image" data-toggle="modal" href="#media_manager">Select Image</a>' +
            '</div></div></div>';

        var slide = '<li data-id="'+ i +'"><img src="" /></li>';

        $('#accordion1').append(panel);
        $('.bxslider').append(slide);
        $( "#accordion1" ).sortable("refresh");
        AddActions ();
    }

    var current_panel;

    function AddActions (){
        $('.accordion-delete').on( "click", function() {
            var id = $(this).closest('.panel.panel-default').data('id');
            $('.bxslider li[data-id="'+ id +'"]').remove();
            $(this).closest('.panel.panel-default').remove();
        });

        $('a.slide_image').off();

        $('a.slide_image').click(function () {
            current_panel = $(this).closest('.panel.panel-default');
            if ($('#kc_frame').length == 0){
                $('<iframe frameborder="0" name="kcfinder_iframe"' +
                'style="width:100%; height:100%; padding: 0px; margin-top: 8px; border-radius: 4px; border: 1px solid rgb(107, 107, 107);' +
                'box-shadow: rgb(107, 107, 107) 0px 0px 4px; min-height: 800px;" ' +
                'id="kc_frame" ' +
                'src="/assets/vendor/ckeditor/plugins/kcfinder/browse.php?type=images" ' +
                '><iframe />').appendTo('.row.iframe');

                window.KCFinder = {
                    callBack: function(url) {
                        $('#media_manager').modal('hide');
                        UpdateSlide (url);
                    }
                };
            }
        });
    }

    function UpdateSlide (url) {
        var id = $(current_panel).data('id');
        $('.bxslider li[data-id="'+ id +'"]').find('img').attr('src', url);
        $(current_panel).find('.gm-media-preview.slide_image').attr('src', url);
        $(current_panel).find('.input-media').val(url);
    }

    function SaveModule () {
        $('input[name="action"]').val('save');
        $("#module_create").submit();
    }

    function SaveAndClose () {
        $('input[name="action"]').val('saveandclose');
        $("#module_create").submit();
    }
</script>