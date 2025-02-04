<?php

namespace App\Core;

use App\Core\Database;
use App\Core\Session;

class Auth {
    public static function attempt($email, $password) {
        $db = Database::getDB();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            Session::start();
            Session::set('user', ['id' => $user['id'], 'email' => $user['email']]);
            return true;
        }
        return false;
    }

    public static function check() {
        Session::start();
        return Session::has('user');
    }

    public static function user() {
        Session::start();
        return Session::get('user');
    }

    public static function logout() {
        Session::start();
        Session::destroy();
    }
}
