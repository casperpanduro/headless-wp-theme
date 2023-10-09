<?php
namespace CodeByPanduro\Configuration;

class UserRole {

    public static function remove($role) {
        // if role not already exists, bail
        if (!get_role($role)) {
            return;
        }

        remove_role($role);
    }

    public static function removeArray($roles) {
        foreach ($roles as $role) {
            self::remove($role);
        }
    }
}
