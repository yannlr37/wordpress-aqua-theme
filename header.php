<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <?php 
            wp_head(); 
        ?>
    </head>
    <body>
        <header>
            <div id="top-menu-container">
                <div id="brand">
                    <div id="brand-logo"></div>
                    <span id="brand-name">Developer</span>
                </div>
                <div id="top-menu">
                    <ul>
                        <li>Technologies</li>
                        <li>Resources</li>
                        <li>Programs</li>
                        <li>Support</li>
                        <li>Member Center</li>
                    </ul>
                </div>
                <div id="top-search">
                    <input type="text" name="global_search" placeholder="search">
                </div>
            </div>
            <div id="main-menubar">
                <div id="menu-item-logo">
                </div>
                <div id="menu-item-title">
                    iOS Dev Center
                </div>
            </div>
        </header>
