<?php

function get_header()
{
	include 'header.php';
}

function get_footer()
{
	include 'footer.php';
}

function language_attributes()
{
	echo 'lang="fr"';
}

function bloginfo(string $charset)
{
	echo 'UTF-8';
}

function wp_head()
{
	$html = '<link rel="stylesheet" href="style.css">';
	echo $html;
}

function wp_footer()
{
	echo '';
}