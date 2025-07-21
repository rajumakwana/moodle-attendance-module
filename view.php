<?php
require_once('../../config.php');
$id = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('attendance', $id, 0, false, MUST_EXIST);
$context = context_module::instance($cm->id);

require_login($cm->course, false, $cm);

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'attendance'));
// Display attendance sessions and records here.
echo $OUTPUT->footer();
