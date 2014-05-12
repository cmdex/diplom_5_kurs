/*
 * SimpleModal Basic Modal Dialog
 * http://simplemodal.com
 *
 * Copyright (c) 2013 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */

jQuery(function ($) {
	// Load dialog on page load
	//$('#basic-modal-content').modal();

	// Load dialog on click
	$('#basic-foto .basic').click(function (e) {
		$('#content-foto').modal();

		return false;
	});


});

jQuery(function ($) {
    $('#basic-video .basic').click(function (e) {
		$('#content-video').modal();

		return false;
	});
});

jQuery(function ($) {
    $('#basic-audio .basic').click(function (e) {
		$('#content-audio').modal();

		return false;
	});
});