<?php defined('SYSPATH') or die('No direct script access.');

return array(
	/*
	 * Files defining the behavior of the markItUp markup editor.
	 * All files relative to the guide folder.
	 */
	'markitup' => array(
		// The stylesheet defining the look-and-feel of markItUp
		'skin'     => 'markitup/src/markitup/skins/simple/style.css',
		// The stylesheet for the markup set (html, markdown, etc.)
		'style'    => 'markitup/src/markitup/sets/default/style.css',
		// The settings script for the markup set
		'settings' => 'markitup/src/marktiup/sets/default/set.js',
	),

	'userguide' => array(
		'markitup' => array(
			'enabled'     => TRUE,
			'name'        => 'markItUp',
			'description' => 'markItUp markup editor support',
			'file'        => 'markitup',
		),
	),

);
