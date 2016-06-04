<?php
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Columns DCA
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

if (TL_MODE === 'BE') {
	$assetsDir = version_compare(VERSION, '4.0', '>=')
		? 'bundles/rocksolidcolumns'
		: 'system/modules/rocksolid-columns/assets';
	$GLOBALS['TL_CSS'][] = $assetsDir . '/css/be_main.css';
}

$GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'][] = array('MadeYourDay\\Contao\\Columns', 'onsubmitCallback');

$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_columns_start'] = '{type_legend},type,headline;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_columns_stop'] = '{type_legend},type;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_column_start'] = '{type_legend},type,headline;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_column_stop'] = '{type_legend},type;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';


