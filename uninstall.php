<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   ivanhoe
 * @author    Scholars' Lab Praxis Fellows <praxis@collab.virginia.edu>
 * @license   GPL-2.0+
 * @link      http://ivanhoe.scholarslab.org
 * @copyright 8-19-2014 Scholars' Lab
 */

// If uninstall, not called from WordPress, then exit
if (!defined("WP_UNINSTALL_PLUGIN")) {
	exit;
}

// TODO: Define uninstall functionality here