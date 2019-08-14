<?php
/**
 * @package FA Board Icons
 * @author Sami "SychO" Mazouz
 * @version 1.0
 * @license MIT
 */

/**
 * Called by:
 *      integrate_sceditor_options
 */
function spp_sceditor_options(&$sce_options)
{
	loadJavaScriptFile('sceditor.plaintext.js', array('minimize' => true), 'smf_sceditor_plaintext');

	if (empty($sce_options['plugins']))
		$sce_options['plugins'] = 'plaintext';
	else
		$sce_options['plugins'] .= ',plaintext';
}