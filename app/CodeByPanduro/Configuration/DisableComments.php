<?php
namespace CodeByPanduro\Configuration;

/**
 * Disable comments
 *
 * @return void
 */
class DisableComments {
    public function __construct() {
        add_filter('comments_open', '__return_false', 20, 2);
        add_filter('pings_open', '__return_false', 20, 2);
        add_filter('comments_array', '__return_empty_array', 10, 2);
        add_action('admin_menu', [$this, 'remove_comments_admin_menu']);
        add_action('admin_init', [$this, 'redirect_comments_page']);
    }

    // Disable comments in admin menu
    public function remove_comments_admin_menu() {
        remove_menu_page('edit-comments.php');
    }

    // Redirect any access to the Comments page to the Dashboard

    function redirect_comments_page() {
        global $pagenow;
        if ($pagenow === 'edit-comments.php') {
            wp_redirect(admin_url());
            exit();
        }
    }
}
