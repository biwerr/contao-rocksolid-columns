<?php
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MadeYourDay\Contao\Element;

/**
 * Column start content element
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */
class ColumnStart extends \ContentElement
{
	/**
	 * @var string Template
	 */
	protected $strTemplate = 'ce_rs_column_start';

	/**
	 * Parse the template
	 *
	 * @return string Parsed element
	 */
	public function generate()
	{
		if (TL_MODE === 'BE') {
			return parent::generate();
		}


		$parentKey = ($this->arrData['ptable'] ?: 'tl_article') . '__' . $this->arrData['pid'];

		if (isset($GLOBALS['TL_RS_COLUMNS'][$parentKey]) && $GLOBALS['TL_RS_COLUMNS'][$parentKey]['active']) {



		}
		else {
			trigger_error('Missing column wrapper start element before column start element ID ' . $this->id . '.', E_USER_WARNING);
		}

		if (!is_array($this->cssID)) {
			$this->cssID = array('', '');
		}
		$this->arrData['cssID'][1] .= ' ';

		return parent::generate();
	}

	/**
	 * Compile the content element
	 *
	 * @return void
	 */
	public function compile()
	{
		if (TL_MODE == 'BE') {
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = $this->headline;
		}
		else {
			$this->Template = new \FrontendTemplate($this->strTemplate);
			$this->Template->setData($this->arrData);
		}
	}
}
