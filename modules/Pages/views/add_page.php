<?php
if(isset($page)){
   $safitext = preg_replace('/<db>(.+?)<.info>/', '', $page->original);
    $safitext = preg_replace('/<.div><.db>/', '', $safitext);
}
?>



    <div class="form-group col-md-8">
        <label>Page Title</label>
        <input type="text" class="form-control" name="title" id="title" value="<?php echo (isset($page))? $page->title : ""; ?>" required>
    </div>
    <div id="content-area"><info>Drag Element here to edit. Add containers first then add components into the containers</info> <?php echo (isset($page))? $safitext : ""; ?></div>

    <script type="text/javascript">
        var bsTooltip = $.fn.tooltip;
        var bsButton = $.fn.button;
    </script>
    <?php $GLOBALS['snippets_url'] = base_url();?>
    <script type="text/javascript">
        $.widget.bridge('uibutton', $.ui.button);
        $.widget.bridge('uitooltip', $.ui.tooltip);
        $.fn.tooltip = bsTooltip;
        $.fn.button = bsButton;
        var snippetsurl = "<?php echo base_url()."assets/snippets/default/snippets.php";?>" ;
    </script>

    <script src="/assets/dist/keditor/js/keditor-1.1.4.js"></script>
    <script src="/assets/dist/keditor/js/keditor-components-1.1.4.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#content-area').keditor();
        });
    </script>

    <div class="col-md-10 text-center" style="background-color:#f8f8f8;  bottom:0; padding:10px;">
        <div class="form-group">
                <a class="btn btn-primary center-block" style="width: 120px;" <?php echo (isset($page))? "id='edit_page' rel='".$page->id."'" : "id='save_page'" ?>>
                    Save page
                </a>
        </div>
    </div>
    <script type="text/javascript">
            $(document).on('click', '#save_page', function() {
            var page = $('#content-area').html();
            var title = $("#title").val()
            var gurl = '<?php echo site_url()?>';
                $.ajax({
                    type: "POST",
                    url: gurl + 'pages/save_page/',
                    data: "page=" + page + "&title=" + title + "&<?= $csrf['name'].'='.$csrf['hash']; ?>",
                    success: function() {
                    //redirect

                    window.location.href = gurl + 'pages';
                    }
                });

            });

            $(document).on('click', '#edit_page', function() {

                var rel = this.rel;
                var page = $('#content-area').html();
                var title = $("#title").val();
                var gurl = '<?php echo site_url()?>';
                $.ajax({
                    type: "POST",
                    url: gurl + 'pages/update_page/' + rel,
                    data: "page=" + page + "&title=" + title + "&<?= $csrf['name'].'='.$csrf['hash']; ?>",
                    success: function() {
                        //redirect

                        window.location.href = gurl + 'pages';
                    }
                });

            });
    </script>
