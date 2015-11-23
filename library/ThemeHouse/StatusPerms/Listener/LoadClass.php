<?php

class ThemeHouse_StatusPerms_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_StatusPerms' => array(
                'model' => array(
                    'XenForo_Model_ProfilePost',
                    'XenForo_Model_UserProfile'
                ), /* END 'model' */
            ), /* END 'ThemeHouse_StatusPerms' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new ThemeHouse_StatusPerms_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */
}