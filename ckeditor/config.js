CKEDITOR.editorConfig = function( config ) {

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
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'justify', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' }
	];

	config.removeButtons = 'Underline,Subscript,Superscript';
	config.format_tags = 'p;h1;h2;h3;pre';

	config.removeDialogTabs = 'image:advanced;link:advanced';
	//config.filebrowserUploadUrl = 'http://localhost/RoadUB1/upload.php';
};
