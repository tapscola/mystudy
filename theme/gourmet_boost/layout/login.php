<?php


defined('MOODLE_INTERNAL') || die();

$bodyattributes = $OUTPUT->body_attributes();

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'bodyattributes' => $bodyattributes
];

$PAGE->requires->jquery ();
$PAGE->requires->js('/theme/gourmet_boost/plugins/back-to-top.js');

echo $OUTPUT->render_from_template('theme_gourmet_boost/login', $templatecontext);

