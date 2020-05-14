<?php


defined('MOODLE_INTERNAL') || die();

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT
];
$PAGE->requires->jquery ();
$PAGE->requires->js('/theme/gourmet_boost/plugins/back-to-top.js');

echo $OUTPUT->render_from_template('theme_gourmet_boost/embedded', $templatecontext);
