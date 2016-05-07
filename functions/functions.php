<?php
namespace BEA\EP;

/**
 * Check if a page is excluded
 *
 * @param int $page_id
 *
 * @return bool
 */
function bea_ep_is_excluded_page( $page_id = 0 ) {
	$excluded_pages = \BEA\EP\Main::get_excluded_pages_option();
	if ( empty( $excluded_pages ) ) {
		return false;
	}

	if ( in_array( (int) $page_id, $excluded_pages ) ) {
		return true;
	}

	return false;
}

/**
 * Get list of exclude page
 *
 * @return array|mixed|void
 */
function bea_ep_get_all_excluded_pages() {
	return \BEA\EP\Main::get_excluded_pages_option();
}