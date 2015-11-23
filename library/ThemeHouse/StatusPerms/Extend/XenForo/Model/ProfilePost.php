<?php

/**
 *
 * @see XenForo_Model_ProfilePost
 */
class ThemeHouse_StatusPerms_Extend_XenForo_Model_ProfilePost extends XFCP_ThemeHouse_StatusPerms_Extend_XenForo_Model_ProfilePost
{

    public function prepareProfilePostConditions(array $conditions, array &$fetchOptions)
    {
        $sqlConditions[] = parent::prepareProfilePostConditions($conditions, $fetchOptions);
        $db = $this->_getDb();
        
        if (!empty($conditions['profile_post_user_id'])) {
            $sqlConditions[] = "profile_post.user_id = " . $db->quote($conditions['profile_post_user_id']);
        }
        
        return $this->getConditionsForClause($sqlConditions);
    } /* END prepareProfilePostConditions */

    /**
     *
     * @see XenForo_Model_ProfilePost::canViewProfilePost()
     */
    public function canViewProfilePost(array $profilePost, array $user, &$errorPhraseKey = '', array $viewingUser = null)
    {
        $this->standardizeViewingUserReference($viewingUser);
        if ($profilePost['user_id'] == $viewingUser['user_id']) {
            if (!XenForo_Permission::hasPermission($viewingUser['permissions'], 'profilePost', 'viewOwnStatus')) {
                return false;
            }
            
            if ($profilePost['message_state'] == 'deleted' &&
                 !XenForo_Permission::hasPermission($viewingUser['permissions'], 'profilePost', 'viewOwnDeletedStatus')) {
                return false;
            }
            
            return $this->_getUserProfileModel()->canViewProfilePosts($user, $errorPhraseKey, $viewingUser);
        }
        
        return parent::canViewProfilePost($profilePost, $user, $errorPhraseKey, $viewingUser);
    } /* END canViewProfilePost */

    /**
     *
     * @see XenForo_Model_ProfilePost::canUndeleteProfilePost()
     */
    public function canUndeleteProfilePost(array $profilePost, array $user, &$errorPhraseKey = '', 
        array $viewingUser = null)
    {
        $this->standardizeViewingUserReference($viewingUser);
        if ($profilePost['user_id'] == $viewingUser['user_id']) {
            return ($viewingUser['user_id'] &&
                 XenForo_Permission::hasPermission($viewingUser['permissions'], 'profilePost', 'undeleteOwnStatus'));
        }
        
        return parent::canUndeleteProfilePost($profilePost, $user, $errorPhraseKey, $viewingUser);
    } /* END canUndeleteProfilePost */

    /**
     *
     * @see XenForo_Model_ProfilePost::getPermissionBasedProfilePostConditions()
     */
    public function getPermissionBasedProfilePostConditions(array $user, array $viewingUser = null)
    {
        $conditions = parent::getPermissionBasedProfilePostConditions($user, $viewingUser);
        
        $this->standardizeViewingUserReference($viewingUser);
        
        if ($user['user_id'] == $viewingUser['user_id'] &&
             !XenForo_Permission::hasPermission($viewingUser['permissions'], 'profilePost', 'view') &&
             XenForo_Permission::hasPermission($viewingUser['permissions'], 'profilePost', 'viewOwnStatus')) {
            $conditions['profile_post_user_id'] = $viewingUser['user_id'];
        }
        
        return $conditions;
    } /* END getPermissionBasedProfilePostConditions */
}