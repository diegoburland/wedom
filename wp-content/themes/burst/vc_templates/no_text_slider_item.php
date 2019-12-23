<?php

$html  = '<li>';
$html .= do_shortcode($content);
$html .= '</li>';

echo burst_mikado_get_module_part($html);