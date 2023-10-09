<?php
namespace CodeByPanduro\Configuration;

class HeadlessAdmin {
    public function __construct() {
        $this->create();
    }

    public function create()
    {
        // Get admin role capabilities
        $editor_role = get_role('administrator');

        $new_capabilities = array(
            'install_plugins' => false,
            'activate_plugins' => true,
            'delete_plugins' => false,
            'edit_themes' => false,
            'install_themes' => false,
            'delete_themes' => false,
            'update_themes' => false,
            'customize' => false
        );

        CustomUserRole::make('Headless admin')
            ->addCapabilities(array_merge($editor_role->capabilities, $new_capabilities))
            ->add();

        // Remove capabilities from "Admin" role
        //$this->reduceAdministratorCaps(); // todo this does not work
    }

    public function reduceAdministratorCaps() {
        $admin_role = get_role('administrator');
        $admin_caps = $admin_role->capabilities;

        // Remove capabilities from "Admin" role
        $admin_role->add_cap('activate_plugins');
        $admin_role->add_cap('edit_plugins');
        $admin_role->add_cap('install_plugins');
        $admin_role->add_cap('delete_plugins');
        $admin_role->add_cap('update_plugins');

        $admin_role->add_cap('edit_theme_options');
        $admin_role->add_cap('delete_themes');
        $admin_role->add_cap('install_themes');
        $admin_role->add_cap('update_themes');

        $admin_role->add_cap('import');
        $admin_role->add_cap('export');
    }

}
