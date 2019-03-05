CKEDITOR.editorConfig = function( config ) {
  config.language = 'fa';
  config.extraPlugins = "syntaxhighlight";
  config.skin= 'moonocolor',
  config.contentsLangDirection= 'rtl',
  config.resize_enabled= false,
  config.removePlugins = 'elementspath';
  config.toolbar = [
	  { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
	  { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
	  { name: 'editing', groups: ['find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
	  { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
	  '/',
	  { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
	  { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-','Syntaxhighlight','Blockquote', 'CreateDiv','-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
	  { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
	  { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
	  '/',
	  { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	  { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
	  { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
	  { name: 'others', items: [ '-' ] },
	  { name: 'about', items: [ 'About' ] }
  ];
};