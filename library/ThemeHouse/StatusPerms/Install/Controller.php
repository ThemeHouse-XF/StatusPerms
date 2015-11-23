<?php

class ThemeHouse_StatusPerms_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/status-permissions.1901/';

    /**
     *
     * @see ThemeHouse_Install::_getPermissionEntries()
     */
    protected function _getPermissionEntries()
    {
        return array(
            'profilePost' => array(
                'viewOwnStatus' => array(
                    'permission_group_id' => 'profilePost', /* 'permission_group_id' */
                    'permission_id' => 'view', /* 'permission_id' */
                ), /* 'viewOwnStatus' */
                'postOwn' => array(
                    'permission_group_id' => 'profilePost', /* 'permission_group_id' */
                    'permission_id' => 'post', /* 'permission_id' */
                ), /* 'postOwn' */
                'viewOwnDeletedStatus' => array(
                    'permission_group_id' => 'profilePost', /* 'permission_group_id' */
                    'permission_id' => 'viewDeleted', /* 'permission_id' */
                ), /* 'viewOwnDeletedStatus' */
                'undeleteOwnStatus' => array(
                    'permission_group_id' => 'profilePost', /* 'permission_group_id' */
                    'permission_id' => 'undelete', /* 'permission_id' */
                ), /* 'undeleteOwnStatus' */
            ), /* 'profilePost' */
        );
    } /* END _getPermissionEntries */
}