<div class="row-fluid">
    <div class="span12">

        <div class="btn-toolbar" id="toolbar-btns">
            <div class="btn-wrapper" id="toolbar-save">
                <button type="button" onclick="SavePage ()" class="btn btn-success">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                </button>
            </div>

            <div class="btn-wrapper" id="toolbar-save-close">
                <button type="button" onclick="" class="btn btn-primary">
                    <i class="fa fa-check-square" aria-hidden="true"></i> Save &amp; Close
                </button>
            </div>

            <div class="btn-wrapper" id="toolbar-save-copy">
                <button type="button" onclick="" class="btn btn-info">
                    <i class="fa fa-clone" aria-hidden="true"></i> Save as Copy
                </button>
            </div>

            <div class="btn-wrapper" id="toolbar-cancel">
                <button type="button" onclick="" class="btn btn-danger">
                    <i class="fa fa-window-close" aria-hidden="true"></i> Close
                </button>
            </div>
        </div>

    </div>
</div>

<div id="mycanvas" style="
    float: left;
    width: 77.21%;">

</div>
<div id="components" style="
    width: 22%;
    height: 1000px;
    border: 1px solid black;
    float: right;">
    <div id="draggable"><p>Slider</p></div>
</div>

<!--Row Settings Modal-->
<div class="modal fade" id="row_settings" tabindex="-1" role="basic" aria-hidden="true" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Row settings</h4>
</div>

<div class="modal-body">
<div class="row-settings">
<div class="form-group">
    <label>Section Title</label>
    <input class="form-control addon-input addon-title" type="text"
           data-attrname="title" value=""
           placeholder="">
    <p class="help-block">Insert a title which will display as a section title. Leave blank if
        section does not require any title.</p>
</div>

<div class="form-group">
    <label>Heading</label>
    <select class="form-control" data-attrname="heading_selector"
            id="field_heading_selector">
        <option value="h1">h1</option>
        <option value="h2">h2</option>
        <option value="h3">h3</option>
        <option value="h4">h4</option>
        <option value="h5">h5</option>
        <option value="h6">h6</option>
    </select>
    <p class="help-block">Select Title Headling from the list</p>
</div>
<div class="form-group">
    <label>Title Font Size</label>
    <input id="field_title_fontsize" class="form-control addon-input"
           type="number"
           data-attrname="title_fontsize" value=""
           placeholder="">
    <p class="help-block">Title Font Size</p>
</div>

<div class="form-group">
    <label>Title Font Weight</label>
    <input class="form-control addon-input addon-title_fontweight" type="text"
           data-attrname="title_fontweight" value="" placeholder="">
    <p class="help-block">Set font weight for this selector. e.g. bold</p>
</div>

<div class="form-group">
    <label>Title Color</label>
    <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom">
        <input type="text" class="form-control minicolors minicolors-input"
               data-attrname="title_text_color"
               placeholder="#rrggbb"
               value=""
               size="7">
                            <span class="minicolors-swatch minicolors-sprite minicolors-input-swatch">
                                <span class="minicolors-swatch-color"></span>
                            </span>

        <div class="minicolors-panel minicolors-slider-hue">
            <div class="minicolors-slider minicolors-sprite">
                <div class="minicolors-picker" style="top: 0px;"></div>
            </div>
            <div class="minicolors-opacity-slider minicolors-sprite">
                <div class="minicolors-picker"></div>
            </div>
            <div class="minicolors-grid minicolors-sprite" style="background-color: rgb(255, 0, 0);">
                <div class="minicolors-grid-inner"></div>
                <div class="minicolors-picker" style="top: 150px; left: 0px;">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <p class="help-block">Title Text Color</p>
</div>

<div class="form-group">
    <label>Title Margin Top</label>
    <input id="field_title_margin_top" class="form-control addon-input"
           type="number"
           data-attrname="title_margin_top"
           value="" placeholder="10">
    <p class="help-block">Set a optimum distance from the Top element</p>
</div>

<div class="form-group">
    <label>Title Margin Bottom</label>
    <input id="field_title_margin_bottom" class="form-control addon-input"
           type="number"
           data-attrname="title_margin_bottom"
           value="" placeholder="10">
    <p class="help-block">Set a optimum distance from the Bottom element</p>
</div>

<div class="form-group">
    <label>Title Position</label>
    <select class="form-control" data-attrname="title_position" >
        <option value="gm-text-left">Left</option>
        <option value="gm-text-center" selected="">Center</option>
        <option value="gm-text-right">Right</option>
    </select>
</div>

<div class="form-group">
    <label>Background Color</label>
    <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom">
        <input type="text" class="form-control minicolors minicolors-input"
               data-attrname="background_color" data-type="css"
               placeholder="#rrggbb"
               value=""
               size="7">
                            <span class="minicolors-swatch minicolors-sprite minicolors-input-swatch">
                                <span class="minicolors-swatch-color"></span>
                            </span>

        <div class="minicolors-panel minicolors-slider-hue">
            <div class="minicolors-slider minicolors-sprite">
                <div class="minicolors-picker" style="top: 0px;"></div>
            </div>
            <div class="minicolors-opacity-slider minicolors-sprite">
                <div class="minicolors-picker"></div>
            </div>
            <div class="minicolors-grid minicolors-sprite" style="background-color: rgb(255, 0, 0);">
                <div class="minicolors-grid-inner"></div>
                <div class="minicolors-picker" style="top: 150px; left: 0px;">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <p class="help-block">Set the background color of an element. Use a background color and a text
        color that makes the text easy to read (contrast).</p>
</div>

<div class="form-group">
    <label>Font Color</label>
    <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom">
        <input type="text" class="form-control minicolors minicolors-input"
               data-attrname="color" data-type="css"
               placeholder="#rrggbb"
               value=""
               size="7">
                            <span class="minicolors-swatch minicolors-sprite minicolors-input-swatch">
                                <span class="minicolors-swatch-color"></span>
                            </span>

        <div class="minicolors-panel minicolors-slider-hue">
            <div class="minicolors-slider minicolors-sprite">
                <div class="minicolors-picker" style="top: 0px;"></div>
            </div>
            <div class="minicolors-opacity-slider minicolors-sprite">
                <div class="minicolors-picker"></div>
            </div>
            <div class="minicolors-grid minicolors-sprite" style="background-color: rgb(255, 0, 0);">
                <div class="minicolors-grid-inner"></div>
                <div class="minicolors-picker" style="top: 150px; left: 0px;">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <p class="help-block">Set the color of text.</p>
</div>

<div class="form-group">
    <label>Background Image</label>
    <img class="gm-media-preview no-image" alt="">
    <input type="hidden" data-attrname="background_image" data-type="css"
           class="input-media addon-input"
           value="">
    <a class="btn btn-primary bg_image" data-toggle="modal" href="#media_manager">Select Image</a>
    <a class="btn btn-danger btn-clear-image" href="#">
        <i class="fa fa-times"></i>
    </a>
    <p class="help-block">Set background images for an element. Always set a background-color to be
        used if the image is unavailable.</p>
</div>

<div class="form-group">
    <label>Background Repeat</label>
    <select class="form-control" data-attrname="background_repeat" data-type="css">
        <option value="no-repeat" selected="">No Repeat</option>
        <option value="repeat">Repeat All</option>
        <option value="repeat-x">Repeat Horizontally</option>
        <option value="repeat-y">Repeat Vertically</option>
        <option value="inherit">Inherit</option>
    </select>
    <p class="help-block">Set image background repeat type</p>
</div>

<div class="form-group">
    <label>Background Size</label>
    <select class="form-control" data-attrname="background_size" data-type="css">
        <option value="cover" selected="">Cover</option>
        <option value="contain">Contain</option>
        <option value="inherit">Inherit</option>
    </select>
    <p class="help-block">Set the size of the background image. Default vaule is cover - is means
        scale the background image to be as large as possible so that the background area is
        completely covered by the background image.</p>
</div>

<div class="form-group">
    <label>Background Attachment</label>
    <select class="form-control" data-attrname="background_attachment" data-type="css">
        <option value="fixed" >Fixed</option>
        <option value="scroll">Scroll</option>
        <option value="inherit" selected="">Inherit</option>
    </select>
    <p class="help-block">Set whether a background image is fixed or scrolls with the rest of the
        page</p>
</div>

<div class="form-group">
    <label>Background Position</label>
    <select class="form-control" data-attrname="background_position" data-type="css">
        <option value="0 0" selected="">Left Top</option>
        <option value="0 50%">Left Center</option>
        <option value="0 100%">Left Bottom</option>
        <option value="50% 0">Center Top</option>
        <option value="50% 50%">Center Center</option>
        <option value="50% 100%">Center Bottom</option>
        <option value="100% 0">Right Top</option>
        <option value="100% 50%">Right Center</option>
        <option value="100% 100%">Right Bottom</option>
    </select>
    <p class="help-block">Set the starting position of a background image.</p>
</div>

<div class="form-group" style="display: none;">
    <div class="mt-checkbox-list">
        <label class="mt-checkbox mt-checkbox-outline"> Enable video in the background
            <input type="checkbox" data-attrname="background_video">
            <span></span>
        </label>
        <p class="help-block">Enable this option to set video background for this section</p>
    </div>
</div>

<div class="form-group" style="display: none;">
    <label>URL for Background Video MP4</label>
    <input class="form-control addon-input addon-background_video_mp4" type="text"
           data-attrname="background_video_mp4"  value=""
           placeholder="http://yoursite.com/video/video.mp4">
</div>

<div class="form-group" style="display: none;">
    <label>URL for Background Video OGV</label>
    <input class="form-control addon-input addon-background_video_ogv" type="text"
           data-attrname="background_video_ogv"  value=""
           placeholder="http://yoursite.com/video/video.ogv">
</div>

<div class="form-group" >
    <label>Section ID</label>
    <input class="form-control addon-input addon-id"
           type="text" data-attrname="id" data-type="custom_id" value=""
           placeholder="">
    <p class="help-block">Set the ID attribute for the specific element. An ID should be unique
        within a page, each element can have only one ID.</p>
</div>

<div class="form-group">
    <label>CSS Class</label>
    <input class="form-control addon-input addon-class"
           type="text" data-attrname="class" data-type="custom_class" value=""
           placeholder="">
    <p class="help-block">If you wish to style particular content element differently, then use this
        field to add a class name and then refer to it in your css file.</p>
</div>

<div class="form-group">
    <label>Padding</label>
    <input class="form-control addon-input addon-padding"
           type="text" data-attrname="padding" data-type="css" value=""
           placeholder="10px 10px 10px 10px">
    <p class="help-block">Set all the padding area a the space between the content of the element
        and its border (Top Right Bottom Left). Negative values are not allowed.</p>
</div>

<div class="form-group">
    <label>Margin</label>
    <input class="form-control addon-input addon-margin"
           type="text" data-attrname="margin" data-type="css" value=""
           placeholder="10px 10px 10px 10px">
    <p class="help-block">Set the margin for all four sides (Top Right Bottom Left). Negative values
        are also allowed.</p>
</div>

<div class="form-group">
    <div class="mt-checkbox-list">
        <label class="mt-checkbox mt-checkbox-outline"> Fluid Row
            <input type="checkbox"  data-attrname="fluid" data-type="checkbox">
            <span></span>
        </label>
        <p class="help-block">Enable this option to make this section fluid. Fluid row will help you to
            publish full width content like google map.</p>
    </div>
</div>

<div class="form-group">
    <div class="mt-checkbox-list">
        <label class="mt-checkbox mt-checkbox-outline"> Hidden XS
            <input type="checkbox" data-type="checkbox" data-attrname="hidden_xs">
            <span></span>
        </label>
        <p class="help-block">Enable this option for hide this section on mobile (phone) devices with width < 768px.</p>
    </div>
</div>

<div class="form-group">
    <div class="mt-checkbox-list">
        <label class="mt-checkbox mt-checkbox-outline"> Hidden SM
            <input type="checkbox" data-type="checkbox" data-attrname="hidden_sm">
            <span></span>
        </label>
        <p class="help-block">Enable this option for hide this section on mobile (tablet) devices with width ≥ 768px and < 992px.</p>
    </div>
</div>

<div class="form-group">
    <div class="mt-checkbox-list">
        <label class="mt-checkbox mt-checkbox-outline"> Hidden MD
            <input type="checkbox" data-type="checkbox" data-attrname="hidden_md">
            <span></span>
        </label>
        <p class="help-block">Enable this option for hide this section on (desktop) devices with width ≥ 992px and < 1200px.</p>
    </div>
</div>

<div class="form-group">
    <div class="mt-checkbox-list">
        <label class="mt-checkbox mt-checkbox-outline"> Hidden LG
            <input type="checkbox" data-type="checkbox" data-attrname="hidden_lg">
            <span></span>
        </label>
        <p class="help-block">Enable this option for hide this section on (desktop) devices with width ≥ 1200px.</p>
    </div>
</div>

</div>
</div>

<div class="modal-footer">
    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
    <button type="button" class="btn green save">Save changes</button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!--END Row Settings Modal-->

<!--Column Settings Modal-->
<div class="modal fade" id="column_settings" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Column settings</h4>
            </div>

            <div class="modal-body">
                <div class="column_settings">

                    <div class="form-group">
                        <label>Background Color</label>
                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom">
                            <input type="text" class="form-control minicolors minicolors-input"
                                   data-attrname="background_color"
                                   placeholder="#rrggbb"
                                   value=""
                                   size="7">
                            <span class="minicolors-swatch minicolors-sprite minicolors-input-swatch">
                                <span class="minicolors-swatch-color"></span>
                            </span>

                            <div class="minicolors-panel minicolors-slider-hue">
                                <div class="minicolors-slider minicolors-sprite">
                                    <div class="minicolors-picker" style="top: 0px;"></div>
                                </div>
                                <div class="minicolors-opacity-slider minicolors-sprite">
                                    <div class="minicolors-picker"></div>
                                </div>
                                <div class="minicolors-grid minicolors-sprite" style="background-color: rgb(255, 0, 0);">
                                    <div class="minicolors-grid-inner"></div>
                                    <div class="minicolors-picker" style="top: 150px; left: 0px;">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="help-block">Set the background color of an element. Use a background color and a text color that
                            makes the text easy to read (contrast).</p>
                    </div>

                    <div class="form-group">
                        <label>Font Color</label>
                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom">
                            <input type="text" class="form-control minicolors minicolors-input"
                                   data-attrname="color"
                                   placeholder="#rrggbb"
                                   value=""
                                   size="7">
                            <span class="minicolors-swatch minicolors-sprite minicolors-input-swatch">
                                <span class="minicolors-swatch-color"></span>
                            </span>

                            <div class="minicolors-panel minicolors-slider-hue">
                                <div class="minicolors-slider minicolors-sprite">
                                    <div class="minicolors-picker" style="top: 0px;"></div>
                                </div>
                                <div class="minicolors-opacity-slider minicolors-sprite">
                                    <div class="minicolors-picker"></div>
                                </div>
                                <div class="minicolors-grid minicolors-sprite" style="background-color: rgb(255, 0, 0);">
                                    <div class="minicolors-grid-inner"></div>
                                    <div class="minicolors-picker" style="top: 150px; left: 0px;">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="help-block">Set the color of text.</p>
                    </div>


                    <div class="form-group">
                        <label>Column Padding</label>
                        <input class="form-control addon-input addon-padding"
                               type="text" data-attrname="padding" value=""
                               placeholder="10px 10px 10px 10px"
                               aria-invalid="false">
                        <p class="help-block"></p>
                    </div>


                    <div class="form-group">
                        <label>CSS Class</label>
                        <input class="form-control addon-input addon-class" type="text"
                               data-attrname="class" value="" placeholder="">
                        <p class="help-block">If you wish to style particular content element differently, then use this field to
                            add a class name and then refer to it in your css file.</p>
                    </div>

                    <div class="form-group">
                        <label>XS Width</label>
                        <select class="form-control" data-attrname="width_xs" data-type="col_width">
                            <? for ($i=1;$i<=12;$i++) {
                                echo "<option value='$i'>$i</option>";
                            }?>
                        </select>
                        <p class="help-block">Set width of column for mobile (phone) devices with width < 768px.</p>
                    </div>

                    <div class="form-group">
                        <label>SM Width</label>
                        <select class="form-control" data-attrname="width_sm" data-type="col_width">
                            <? for ($i=1;$i<=12;$i++) {
                                echo "<option value='$i'>$i</option>";
                            }?>
                        </select>
                        <p class="help-block">Set width of column for mobile (tablet) devices with width ≥ 768px and < 992px.</p>
                    </div>

                    <div class="form-group">
                        <label>MD Width</label>
                        <select class="form-control" data-attrname="width_md" data-type="col_width">
                            <? for ($i=1;$i<=12;$i++) {
                                echo "<option value='$i'>$i</option>";
                            }?>
                        </select>
                        <p class="help-block">Set width of column for (desktop) devices with width ≥ 992px and < 1200px.</p>
                    </div>

                    <div class="form-group">
                        <label>LG Width</label>
                        <select class="form-control" data-attrname="width_lg" data-type="col_width">
                            <? for ($i=1;$i<=12;$i++) {
                                echo "<option value='$i'>$i</option>";
                            }?>
                        </select>
                        <p class="help-block">Set width of column for (desktop) devices with width ≥ 1200px.</p>
                    </div>

                    <div class="form-group">
                        <label>XS Offset</label>
                        <select class="form-control" data-attrname="xs_offset" data-type="col_offset">
                            <? for ($i=0;$i<=12;$i++) {
                                echo "<option value='$i'>$i</option>";
                            }?>
                        </select>
                        <p class="help-block">Set offset of column for mobile (phone) devices with width < 768px.</p>
                    </div>

                    <div class="form-group">
                        <label>SM Offset</label>
                        <select class="form-control" data-attrname="sm_offset" data-type="col_offset">
                            <? for ($i=0;$i<=12;$i++) {
                                echo "<option value='$i'>$i</option>";
                            }?>
                        </select>
                        <p class="help-block">Set offset of column for mobile (tablet) devices with width ≥ 768px and < 992px.</p>
                    </div>

                    <div class="form-group">
                        <label>MD Offset</label>
                        <select class="form-control" data-attrname="md_offset" data-type="col_offset">
                            <? for ($i=0;$i<=12;$i++) {
                                echo "<option value='$i'>$i</option>";
                            }?>
                        </select>
                        <p class="help-block">Set offset of column for (desktop) devices with width ≥ 992px and < 1200px.</p>
                    </div>

                    <div class="form-group">
                        <label>LG Offset</label>
                        <select class="form-control" data-attrname="lg_offset" data-type="col_offset">
                            <? for ($i=0;$i<=12;$i++) {
                                echo "<option value='$i'>$i</option>";
                            }?>
                        </select>
                        <p class="help-block">Set offset of column for (desktop) devices with width ≥ 1200px.</p>
                    </div>

                    <div class="form-group">
                        <div class="mt-checkbox-list">
                            <label class="mt-checkbox mt-checkbox-outline"> Hidden XS
                                <input type="checkbox" data-type="checkbox" data-attrname="hidden_xs">
                                <span></span>
                            </label>
                            <p class="help-block">Enable this option for hide this section on mobile (phone) devices with width < 768px.</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mt-checkbox-list">
                            <label class="mt-checkbox mt-checkbox-outline"> Hidden SM
                                <input type="checkbox" data-type="checkbox" data-attrname="hidden_sm">
                                <span></span>
                            </label>
                            <p class="help-block">Enable this option for hide this section on mobile (tablet) devices with width ≥ 768px and < 992px.</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mt-checkbox-list">
                            <label class="mt-checkbox mt-checkbox-outline"> Hidden MD
                                <input type="checkbox" data-type="checkbox" data-attrname="hidden_md">
                                <span></span>
                            </label>
                            <p class="help-block">Enable this option for hide this section on (desktop) devices with width ≥ 992px and < 1200px.</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mt-checkbox-list">
                            <label class="mt-checkbox mt-checkbox-outline"> Hidden LG
                                <input type="checkbox" data-type="checkbox" data-attrname="hidden_lg">
                                <span></span>
                            </label>
                            <p class="help-block">Enable this option for hide this section on (desktop) devices with width ≥ 1200px.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green save">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--END Column Settings Modal-->

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
    var slider = '' +
        '<ul class="bxslider">'+
        '<li><img src="/images/1.jpg" /></li>'+
        '<li><img src="/images/2.jpg" /></li>'+
        '<li><img src="/images/3.png" /></li>'+
        '<li><img src="/images/4.jpg" /></li>'+
        '</ul>';
    $( function() {
        $( "#draggable" ).draggable({
            helper: "clone",
            revert: "invalid",
            snap: "#droppable"
        });
    } );


</script>

<script>

    function SavePage () {
        var rows = [];
        $('.container > .row.gm-editing').each(function (r) {
            var row_obj = $(this).data();
            row_obj.columns = [];
            $(this).children('.column').each(function (c) {
                row_obj.columns[c] = $(this).data();
            });
            rows[r] = row_obj;
        });
        console.log(rows)
    }

    $(document).ready(function(){
        $("#mycanvas").gridmanager(
            {
                debug: 1,
                ckeditor: {
                    customConfig: "/assets/vendor/ckeditor/config.js"
                }
            }
        );

        $('a.bg_image').click(function () {
            if ($('#kc_frame').length == 0){
                $('<iframe frameborder="0" name="kcfinder_iframe"' +
                'style="width:100%; height:100%; padding: 0px; margin-top: 8px; border-radius: 4px; border: 1px solid rgb(107, 107, 107);' +
                'box-shadow: rgb(107, 107, 107) 0px 0px 4px; min-height: 800px;" ' +
                'id="kc_frame" ' +
                'src="/assets/vendor/ckeditor/plugins/kcfinder/browse.php?type=images"' +
                '><iframe />').appendTo('.row.iframe');
            }

            window.KCFinder = {
                callBack: function(url) {
                    window.KCFinder = null;
                    $('[data-attrname="background_image"]').val(url);
                    $('.gm-media-preview').attr('src', url);
                    $('#media_manager').modal('hide');
                }
            };
        });

        $('.btn-clear-image').click(function () {
            $('.gm-media-preview').attr('src', '');
            $('[data-attrname="background_image"]').val('');
        });

    });
</script>

