<?php
require_once('../../config.php');

$courseid = required_param('id', PARAM_INT);
$course = get_course($courseid);
require_login($course);

$PAGE->set_url('/mod/attendance/index.php', array('id' => $courseid));
$PAGE->set_title(get_string('attendance', 'attendance'));
$PAGE->set_heading($course->fullname);

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('attendance', 'attendance'));
// List all attendance activities in this course.
echo $OUTPUT->footer();
