<?php

/**
 * @package daniiltserin-theme
 * =============================
 * ADMIN PAGE
 * =============================
 */

function daniiltserin_add_admin_page()
{
    //generate admin page
    //use hook to activate admin page
    //1. Name of menu page
    //2. Text in menu
    //3. Access options: who can see and mange the page in admin toolbar. `manage_options` let access for all who can write and edit from wordpress admin
    //4. theme-slug
    //5. callback function for creation new page in admin
    //6. Custom icon, provided by wordpress. Default dashboard icon. Formats: svg\png
    //7. position in menu
    //  Poitions:
    //    2 - Dashboard
    //    4 - Separator
    //    5 - Posts
    //    10 - Media
    //    15 - Links
    //    20 - Pages
    //    25 - Comments
    //    59 - Separator
    //    60 - Apperance
    //    65 - Plugins
    //    70 - Users
    //    75 - Tools
    //    80 - Settings
    //    99 - Separator
    add_menu_page("Daniiltserin theme options", "Daniiltserin", "manage_options", 'daniiltserin_theme', 'daniiltserin_theme_create_page', "", 110);

    //generate sub pages
    //1. string parent slug;
    //2. string page title;
    //3. string menu title
    //4. access level;
    //5. string slug;
    add_submenu_page("daniiltserin_theme", 'Daniiltserin theme Settings', 'Settings', "manage_options",
        'daniiltserin_theme_settings', 'daniiltserin_theme_create_settings_page');
}
add_action("admin_menu", 'daniiltserin_add_admin_page');

function daniiltserin_theme_create_page()
{

}

/**
 * generation sub menu page for admin theme
 * @return [type] [description]
 */
function daniiltserin_theme_create_settings_page()
{

}
