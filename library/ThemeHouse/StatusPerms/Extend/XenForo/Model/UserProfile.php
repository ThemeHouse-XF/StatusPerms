<?php

/**
 * 
 * @see XenForo_Model_UserProfile
 */
class ThemeHouse_StatusPerms_Extend_XenForo_Model_UserProfile extends XFCP_ThemeHouse_StatusPerms_Extend_XenForo_Model_UserProfile
{
    
    /**
     *
     * @see XenForo_Model_UserProfile
     */
    public function canViewProfilePosts(array $user, &$errorPhraseKey = '', array $viewingUser = null)
    {
        $this->standardizeViewingUserReference($viewingUser);
        if ($user['user_id'] == $viewingUser['user_id']) {
            return XenForo_Permission::hasPermission($viewingUser['permissions'], 'profilePost', 'viewOwnStatus');
        }
        
        return parent::canViewProfilePosts($user, $errorPhraseKey, $viewingUser);
    } /* END canViewProfilePosts */
}