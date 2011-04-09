<?php defined('SYSPATH') or die('No direct script access.');

/**
 * View supporting the markItUp editor. Adds the necessary
 * JavaScript and CSS stylesheets to the editor page.
 *
 * @package     Luthier/markItUp
 * @category    View
 * @author      Kyle Treubig
 * @copyright   (C) 2011 Kyle Treubig
 * @license     MIT
 */
abstract class View_Luthier_Editor extends View_Luthier_Form {

	/**
	 * Add the JavaScript and CSS files necessary to
	 * support the markItUp markup editor
	 */
	public function render() {
		$config = Kohana::config('luthier.markitup');

		$this->_stylesheets += array(
			// markItUp look-and-feel
			$config['skin'] => 'screen',
			// Markup set styles (html, markdown, etc.)
			$config['style'] => 'screen',
		);

		$this->_scripts += array(
			// Include jQuery 1.5.1
			'http://code.jquery.com/jquery-1.5.1.min.js',
			// Base script powering markItUp
			'markitup/src/markitup/jquery.markitup.js',
			// Markup set settings (html, markdown, etc.)
			$config['settings'],
			// Enables markItUp for textareas
			'markitup/js/enable.js',
		);

		return parent::render();
	}

}
