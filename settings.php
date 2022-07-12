<?php
defined('MOODLE_INTERNAL') || die();

// Our default values.
$defaulturl = 'https://quizlet.com/132695231/scatter/embed';
$defaultheight = '400';
$defaultwidth = '600';
$defaultpage = 'course';
// The page layout options.
$options = array();
$options['course'] = get_string('course');
$options['popup'] = get_string('popup');

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading('block_superframe_header',
        get_string('headerconfig', 'block_superframe'),
        get_string('headerconfigdesc', 'block_superframe')));

    // The url to be displayed.
    $settings->add(new admin_setting_configtext('block_superframe/url',
        get_string('url', 'block_superframe'),
        get_string('url_details', 'block_superframe'),
        $defaulturl, PARAM_RAW));

    // The height of the display.
    $settings->add(new admin_setting_configtext('block_superframe/height',
        get_string('height', 'block_superframe'),
        get_string('height_details', 'block_superframe'),
        $defaultheight, PARAM_INT));

    // The width of the display.
    $settings->add(new admin_setting_configtext('block_superframe/width',
        get_string('width', 'block_superframe'),
        get_string('width_details', 'block_superframe'),
        $defaultwidth, PARAM_INT));

    // The width of the display.
    $settings->add(new admin_setting_configselect('block_superframe/layout',
        get_string('pagelayout', 'block_superframe'),
        get_string('pagelayout_details', 'block_superframe'),
        $defaultpage, $options));
}