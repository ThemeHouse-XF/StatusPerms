<?php

class ThemeHouse_StatusPerms_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/StatusPerms/Extend/XenForo/Model/ProfilePost.php' => '26143696d2a655a5fdacac66455ad306',
                'library/ThemeHouse/StatusPerms/Extend/XenForo/Model/UserProfile.php' => '7be3920bfc6f5d049432ef722435bcaa',
                'library/ThemeHouse/StatusPerms/Extend/XenForo/Visitor.php' => '7ab1d3a7c1bb5c7d5ec4281027193d4d',
                'library/ThemeHouse/StatusPerms/Install/Controller.php' => '2ae1f087a5822e91b74d509bb6bf56dc',
                'library/ThemeHouse/StatusPerms/Listener/ControllerPreDispatch.php' => 'fa9b2f5cf415bdf0a28b12667996f19d',
                'library/ThemeHouse/StatusPerms/Listener/LoadClass.php' => '34f72328853eaed3ca339ecfd3905606',
                'library/ThemeHouse/StatusPerms/Listener/VisitorSetup.php' => '2dbae8b626e845e1401148d2e46c2430',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
                'library/ThemeHouse/Listener/VisitorSetup.php' => 'c2081eab8a0428070a4f0a32830ebcb2',
                'library/ThemeHouse/Listener/VisitorSetup/20150106.php' => '6326d26f4156c51ca5d289d44da5fad8',
            ));
    }
}