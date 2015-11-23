<?php

/**
 *
 * @see XenForo_Visitor
 */
class ThemeHouse_StatusPerms_Extend_XenForo_Visitor extends XFCP_ThemeHouse_StatusPerms_Extend_XenForo_Visitor
{

    /**
     *
     * @see XenForo_Visitor::canUpdateStatus()
     */
    public function canUpdateStatus()
    {
        return ($this->_user['user_id'] && $this->hasPermission('profilePost', 'viewOwnStatus') &&
             $this->hasPermission('profilePost', 'postOwn'));
    } /* END canUpdateStatus */
}