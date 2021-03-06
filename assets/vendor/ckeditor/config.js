/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
CKEDITOR.dtd.$removeEmpty.i = 0;
CKEDITOR.dtd.$removeEmpty.span = 0;

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre;div';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';

    config.allowedContent = true;

    // If you don't have Bootstrap and/or FontAwesome Styles
    config.contentsCss = [

    ];

    config.filebrowserBrowseUrl = '/assets/vendor/ckeditor/plugins/kcfinder/browse.php?type=files';
    config.filebrowserImageBrowseUrl = '/assets/vendor/ckeditor/plugins/kcfinder/browse.php?type=images';
    config.filebrowserFlashBrowseUrl = '/assets/vendor/ckeditor/plugins/kcfinder/browse.php?type=flash';
    config.filebrowserUploadUrl = '/assets/vendor/ckeditor/plugins/kcfinder/upload.php?type=files';
    config.filebrowserImageUploadUrl = '/assets/vendor/ckeditor/plugins/kcfinder/upload.php?type=images';
    config.filebrowserFlashUploadUrl = '/assets/vendor/ckeditor/plugins/kcfinder/upload.php?type=flash';

    //Skin
    config.skin = 'moonocolor';

    //Add Extra Plugins
    config.extraPlugins =
        'bootstrapVisibility,' +
        'widget,' +
        'lineutils,' +
        'clipboard,' +
        'widgetselection,' +
        'dialog,' +
        'dialogui,' +
        'btbutton,' +
        'fontawesome,' +
        'colordialog,' +
        'bt_table,' +
        'bootstrapTabs,' +
        'collapsibleItem,' +
        'accordionList,' +
        'htmlwriter,' +
        'pastecode,' +
        'sourcedialog,' +
        'notification,' +
        'toolbar,' +
        'button,' +
        'blockquote,' +
        'div';
};
