<?php

/*
	Plugin Name: Stop Spam
	Plugin URI: https://github.com/q2apro/q2apro-stop-spam
	Plugin Description: An easy to use customizable captcha with a honeypot that keeps 99 % of the spam away
	Plugin Version: 1.0
	Plugin Date: 2014-02-20
	Plugin Author:  https://github.com/q2apro
	Plugin Author URI: https://github.com/q2apro/q2apro-stop-spam
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: https://github.com/q2apro/q2apro-stop-spam
	
	Licence: Copyright © q2apro.com - All rights reserved

*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	// language strings
	qa_register_plugin_phrases('q2apro-stopspam-lang-*.php', 'q2apro_stopspam_lang');
	
	// captcha module
	qa_register_plugin_module('captcha', 'q2apro-stopspam-captcha.php', 'q2apro_stopspam_captcha', 'Stop Spam Captcha');
	
	// filter post module
	qa_register_plugin_module('filter', 'q2apro-stopspam-filter-posts.php', 'q2apro_stopspam_filter_posts', 'q2apro Stop Spam Filter Posts');

	// layer that inserts javascript alert
	qa_register_plugin_layer('q2apro-prevent-spam-votes-layer.php', 'q2apro Prevent Spam Votes Layer');

	// page for listing links from posts
	qa_register_plugin_module('page', 'q2apro-list-all-posted-links.php', 'q2apro_list_all_posted_links', 'Q2APRO List-all-posted-links Page');

	
/*
	Omit PHP closing tag to help avoid accidental output
*/
