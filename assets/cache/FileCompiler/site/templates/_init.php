<?php namespace ProcessWire;

/**
 * Global initialization for templates
 */
$settings = wire('pages')->get('/site-settings/');
if (!$settings->id) {
    $settings = wire('pages')->get('/');
}
$rootUrl = wire('config')->urls->root;
$title = $page->get('title');
$pageSubtitle = $page->get('page_subtitle');
