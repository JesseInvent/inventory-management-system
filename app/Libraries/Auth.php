<?php namespace App\Libraries;

use CodeIgniter\HTTP\RedirectResponse;

class Auth {

    public static function attempt ($username, $password) :RedirectResponse
    {
        $admin = getAdmin($username);

        if ($admin) {

            if(!comparePassword($password, $admin["password"])) {
                return redirectBackWithMsg("error", "Invalid Credentials");
            }
            unset($admin["password"]);

            session()->set("isLoggedIn", true);

            return redirect()->to("/admin");
            
        } else {
            return redirectBackWithMsg("error", "Invalid Credentials");
        }

    }

    public static function loggedIn () {
         
        if (session()->has("isLoggedIn")) {
            return true;
        } else {
            return false;
        }
    }
 
    public static function logout () {
        session()->destroy();
        return redirect()->to("/");
    }
}