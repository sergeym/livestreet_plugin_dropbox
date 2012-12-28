<?php

/*-------------------------------------------------------
*
*   Dropbox plugin for LiveStreet
*   Copyright © 2012 Sergey Marin
*
*--------------------------------------------------------
*
*   Official site: www.dropbox-for-livestreet.ru
*   Developer site: www.sergeymarin.com
*   Contact e-mail: marin.sergey@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

class PluginDropbox_ModuleDropbox extends Module {

    const ACTIVATION_COOKIE_NAME = 'dropbox-plugin-activation';

    /**
     * @return bool
     */
    public function Activate() {
        setcookie(self::ACTIVATION_COOKIE_NAME,1,time()+60*60*24,Config::Get('sys.cookie.path'),Config::Get('sys.cookie.host'));
        return true;
    }

    /**
     * @return bool
     */
    public function Check()
    {
        $bResult = false;

        if (isset($_COOKIE[PluginDropbox_ModuleDropbox::ACTIVATION_COOKIE_NAME])) {
            setcookie(self::ACTIVATION_COOKIE_NAME,1,time()-60*60*24,Config::Get('sys.cookie.path'),Config::Get('sys.cookie.host'));
            $bResult = true;
        }

        return $bResult;
    }

}
