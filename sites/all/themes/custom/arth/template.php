<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function arth_preprocess_page(&$vars){

	if(isset($vars['node']->type)){
		$vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
	}
}