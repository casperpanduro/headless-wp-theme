<?php
namespace CodeByPanduro\Configuration;

class UserRoleManager {

    public static function removeRole(string $role) {
        // if role not already exists, bail
        if (!get_role($role)) {
            return;
        }

        remove_role($role);
    }

    public static function removeRoles(array $roles = []) {
        foreach ($roles as $role) {
            self::removeRole($role);
        }
    }
}
