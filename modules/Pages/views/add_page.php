<div id="mycanvas" style="
    float: left;
    width: 77.21%;">

</div>
<div id="components" style="
    width: 22.79%;
    height: 1000px;
    border: 1px solid black;
    float: left;">
    <div id="draggable"><p>Slider</p></div>
</div>

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
    <select class="form-control" data-attrname="title_position">
        <option value="gm-text-left">Left</option>
        <option value="gm-text-center" selected="">Center</option>
        <option value="gm-text-right">Right</option>
    </select>
</div>

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
    <p class="help-block">Set the background color of an element. Use a background color and a text
        color that makes the text easy to read (contrast).</p>
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
    <label>Background Image</label>
    <img class="sppb-media-preview no-image" alt="">
    <input type="hidden" data-attrname="background_image"
           class="input-media sppb-media-input addon-input"
           value=""
           id="media-945875">
    <a href="#" class="sppb-btn sppb-btn-primary sppb-btn-media-manager">Select Image</a>
    <a class="sppb-btn sppb-btn-danger btn-clear-image" href="#">
        <i class="icon-remove"></i>
    </a>
    <p class="help-block">Set background images for an element. Always set a background-color to be
        used if the image is unavailable.</p>
</div>

<div class="form-group">
    <label>Background Repeat</label>
    <select class="form-control" data-attrname="background_repeat" >
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
    <select class="form-control" data-attrname="background_size" >
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
    <select class="form-control" data-attrname="background_attachment" >
        <option value="fixed" selected="">Fixed</option>
        <option value="scroll">Scroll</option>
        <option value="inherit">Inherit</option>
    </select>
    <p class="help-block">Set whether a background image is fixed or scrolls with the rest of the
        page</p>
</div>

<div class="form-group">
    <label>Background Attachment</label>
    <select class="form-control" data-attrname="background_position" >
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

<div class="form-group">
    <div class="mt-checkbox-list">
        <label class="mt-checkbox mt-checkbox-outline"> Enable video in the background
            <input type="checkbox" data-attrname="background_video">
            <span></span>
        </label>
        <p class="help-block">Enable this option to set video background for this section</p>
    </div>
</div>

<div class="form-group">
    <label>URL for Background Video MP4</label>
    <input class="form-control addon-input addon-background_video_mp4" type="text"
           data-attrname="background_video_mp4" value=""
           placeholder="http://yoursite.com/video/video.mp4">
</div>

<div class="form-group">
    <label>URL for Background Video OGV</label>
    <input class="form-control addon-input addon-background_video_ogv" type="text"
           data-attrname="background_video_ogv" value=""
           placeholder="http://yoursite.com/video/video.ogv">
</div>

<div class="form-group">
    <label>Section ID</label>
    <input class="form-control addon-input addon-id"
           type="text" data-attrname="id" value=""
           placeholder="">
    <p class="help-block">Set the ID attribute for the specific element. An ID should be unique
        within a page, each element can have only one ID.</p>
</div>

<div class="form-group">
    <label>CSS Class</label>
    <input class="form-control addon-input addon-class"
           type="text" data-attrname="class" value=""
           placeholder="">
    <p class="help-block">If you wish to style particular content element differently, then use this
        field to add a class name and then refer to it in your css file.</p>
</div>

<div class="form-group">
    <label>Padding</label>
    <input class="form-control addon-input addon-padding"
           type="text" data-attrname="padding" value=""
           placeholder="10px 10px 10px 10px">
    <p class="help-block">Set all the padding area a the space between the content of the element
        and its border (Top Right Bottom Left). Negative values are not allowed.</p>
</div>

<div class="form-group">
    <label>Margin</label>
    <input class="form-control addon-input addon-margin"
           type="text" data-attrname="margin" value=""
           placeholder="10px 10px 10px 10px">
    <p class="help-block">Set the margin for all four sides (Top Right Bottom Left). Negative values
        are also allowed.</p>
</div>

<div class="form-group">
    <div class="mt-checkbox-list">
        <label class="mt-checkbox mt-checkbox-outline"> Fluid Row
            <input type="checkbox" data-attrname="fluid">
            <span></span>
        </label>
        <p class="help-block">Enable this option to make this section fluid. Fluid row will help you to
            publish full width content like google map.</p>
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

    $(document).ready(function(){

        $("#mycanvas").gridmanager(
            {
                debug: 1,
                ckeditor: {
                    customConfig: "/assets/vendor/ckeditor/config.js"
                }
            }
        );

    });
</script>