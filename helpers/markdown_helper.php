<?php

function markdown_view($markdown, $raw = false, $prefix = APPPATH . '../sphinx/docs/')
{
    $file = $prefix . $markdown;
    if (!file_exists($file)) throw new Exception('Markdown file is not found in ' . $file);
    if ($raw) return file_get_contents($file);

    $ci = &get_instance();
    $ci->load->library('markdown/Markdown');
    $string = $ci->markdown->transform_file($file);

    $css_file = base_url() . 'assets/vendors/github-markdown-css/github-markdown-light.css';
    return sprintf('<link rel="stylesheet" href="%s">' . PHP_EOL . '<section class="markdown-body">%s</section>', $css_file, $string);
}
