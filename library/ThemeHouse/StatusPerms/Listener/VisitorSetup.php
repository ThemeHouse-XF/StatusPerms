<?php

class ThemeHouse_StatusPerms_Listener_VisitorSetup
{

    public static function visitorSetup(XenForo_Visitor &$visitor)
    {
        $dynamicClass = 'ThemeHouse_StatusPerms_Extend_XenForo_Visitor';
        if ($visitor instanceof $dynamicClass) {
            return;
        }
        $visitor = serialize($visitor);
        $pattern = '#O:[0-9]*:"([^"]*)"#';
        preg_match($pattern, $visitor, $matches);
        if (isset($matches[1])) {
            $proxyClass = 'XFCP_' . $dynamicClass;
            if (!class_exists($proxyClass, false)) {
                eval('class ' . $proxyClass . ' extends ' . $matches[1] . ' {}');
                XenForo_Application::autoload($dynamicClass);
            }
            $replacement = 'O:' . strlen($dynamicClass) . ':"' . $dynamicClass . '"';
            $visitor = preg_replace($pattern, $replacement, $visitor);
        }
        $visitor = unserialize($visitor);
    } /* END visitorSetup */
}