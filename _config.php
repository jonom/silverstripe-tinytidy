<?php
	
// Example TinyMCE configuration
// Copy the code below to your mysite/_config.php file and customise as necessary to match your styles

/*
$formats = array(
	
	// Define the styles that will be available in TinyMCE's dropdown style menu
	// * Use 'selector' to specify which elements a style can be applied to
	// * See Headings example below for explanation of different settings
	// * Using 'classes' allows a class to be combined with others while 'attributes'=>'style' removes other classes before applying

	// Headings
		
	array(
		'title' => 'Headings' // Set a title to be displayed above the following options in the dropdown menu
	),
	array(
		// Applied to the current heading element (inline not allowed)
		'title' => 'Ruled', // Title used in TinyMCE dropdown menu
		'attributes' => array('class'=>'ruled'), // CSS class of .ruled will be applied to element, other classes on this element will be removed
		'selector' => 'h1,h2,h3,h4,h5,h6' // Only allow class to be applied to these elements
	),
	array(
		// Applied to selected text using a span tag, or applied to an inline element if no text is highlighted (inline allowed)
		'title' => 'Sub title',
		'classes' => 'sub-title', // CSS class of .sub-title will be toggled on or off, will not remove or affect other classes on this element
		'inline' => 'span', // Allow applying this style inline to selected text by using a span tag
		'selector' => 'i,em,b,strong,a' // If no text is selected but cursor is within one of these elements, apply class to element
	),

	// Paragraphs
	
	array(
		'title' => 'Paragraphs'
	),
	array(
		'title' => 'Intro',
		'attributes' => array('class'=>'intro'),
		'selector' => 'p'
	),
	array(
		'title' => 'Attention',
		'attributes' => array('class'=>'msg-attention'),
		'selector' => 'p'
	),
	array(
		'title' => 'Note',
		'attributes' => array('class'=>'msg-note'),
		'selector' => 'p'
	),
	
	//Layout
	
	array(
		'title' => 'Layout'
	),
	array(
		// Wrap selected content in a div with class of .split-3
		'title' => '3 Column (auto-flow)',
		'attributes' => array('class'=>'split-3'),
		'block' => 'div',
		'wrapper' => 1
	),
	
	// Text styles
	
	array(
		'title' => 'Selected text'
	),
	array(
		'title' => 'Small',
		'classes' => 'small',
		'inline' => 'span',
		'selector' => 'i,em,b,strong,a'
	),
	array(
		'title' => 'Grey',
		'classes' => 'text-grey',
		'inline' => 'span',
		'selector' => 'i,em,b,strong,a'
	),

	// Lists
	
	array(
		'title' => 'Lists'
	),
	array(
		'title' => '1. 2. 3.',
		'attributes' => array('class'=>'decimal'),
		'selector' => 'ol'
	),
	array(
		'title' => 'i. ii. iii.',
		'attributes' => array('class'=>'roman'),
		'selector' => 'ol'
	),
	array(
		'title' => 'a. b. c.',
		'attributes' => array('class'=>'alpha'),
		'selector' => 'ol'
	),
	
	// Links
	
	array(
		'title' => 'Links'
	),
	array(
		'title' => 'Arrow',
		'attributes' => array('class'=>'arrow'),
		'selector' => 'a'
	),
	array(
		'title' => 'Button',
		'attributes' => array('class'=>'button'),
		'selector' => 'a'
	),
	
	// Tables
	
	array(
		'title' => 'Tables'
	),
	array(
		'title' => 'Condensed',
		'classes' => 'table-condensed',
		'selector' => 'table'
	),
	array(
		'title' => 'Striped',
		'classes' => 'table-striped',
		'selector' => 'table'
	),
	array(
		'title' => 'Bordered',
		'classes' => 'table-bordered',
		'selector' => 'table'
	),
	array(
		'title' => 'Hover effect on rows',
		'classes' => 'table-hover',
		'selector' => 'table'
	),
	
	// Labels
	
	array(
		'title' => 'Labels'
	),
	array(
		'title' => 'Label: green',
		'classes' => 'label-green',
		'inline' => 'span',
		'selector' => 'i,em,b,strong,a'
	),
	array(
		'title' => 'Label: red',
		'classes' => 'label-red',
		'inline' => 'span',
		'selector' => 'i,em,b,strong,a'
	),
	array(
		'title' => 'Label: orange',
		'classes' => 'label-orange',
		'inline' => 'span',
		'selector' => 'i,em,b,strong,a'
	),
	array(
		'title' => 'Label: blue',
		'classes' => 'label-blue',
		'inline' => 'span',
		'selector' => 'i,em,b,strong,a'
	),
	
	// Images
	
	array(
		'title' => 'Images',
	),
	array(
		'title' => 'Align right with text wrap',
		'attributes' => array('class'=>'right'),
		'selector' => 'img,div'
	),
	array(
		'title' => 'Align left with text wrap',
		'attributes' => array('class'=>'left'),
		'selector' => 'img,div'
	),
	array(
		'title' => 'Align center - no text wrap',
		'attributes' => array('class'=>'center'),
		'selector' => 'img,div'
	)
	
);

//Set the dropdown menu options

HtmlEditorConfig::get('cms')->setOption('style_formats',$formats);

// Reconstruct editor toolbar with less buttons

HtmlEditorConfig::get('cms')->setButtonsForLine(1,
	'pastetext',
	'bold',
	'italic',
	'styleselect',
	'formatselect',
	'bullist',
	'numlist',
	'outdent',
	'blockquote',
	'indent',
	'code',
	'fullscreen'
);
HtmlEditorConfig::get('cms')->setButtonsForLine(2,
	'image',
	'link',
	'unlink',
	'anchor',
	'hr',
	'table',
	'row_props',
	'cell_props',
	'row_before',
	'row_after',
	'delete_row',
	'col_before',
	'col_after',
	'delete_col',
	'split_cells',
	'merge_cells'
);
HtmlEditorConfig::get('cms')->setButtonsForLine(3,''); // Delete line 3

// Remove h1 tag option

HtmlEditorConfig::get('cms')->setOption('theme_advanced_blockformats', 'p,address,pre,h2,h3,h4,h5,h6');
*/