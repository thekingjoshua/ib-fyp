<?php 
namespace Framework;

use Framework\Session;

class Authorization {

    /**
     * Check if the current logged in user is the owner of the listing
     * 
     * @param int $resourceId
     * @return bool
     */
    public static function isOwner($resourceId){
        $sessionUser = Session::get('user');
        if($sessionUser !== null && isset($sessionUser['id'])){
            $sessionUserId = (int) $sessionUser['id'];
            return $sessionUserId == $resourceId;
        }
    }
}

