<?php
namespace CodeByPanduro\Configuration;

/**
 * A class to manage user roles
 */
class UserRoleManager {
    /**
     * Remove a role
     * @param string $role
     * @return void
     */
    public static function removeRole(string $role): void {
        // if role not already exists, bail
        if (!get_role($role)) {
            return;
        }

        remove_role($role);
    }

    /**
     * Remove multiple roles
     * @param array $roles
     * @return void
     */
    public static function removeRoles(array $roles = []): void {
        foreach ($roles as $role) {
            self::removeRole($role);
        }
    }
}
