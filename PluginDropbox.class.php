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

if (!class_exists('Plugin')) {
	die('Hacking attemp!');
}

class PluginDropbox extends Plugin {

    protected $aDelegates = array(
        'template' => array(
            'window_load_img.tpl' => '_window_load_img.tpl',
        ),
    );

	/**
	 * Plugin Dropbox activation
	 */
	public function Activate() {

        return true;
	}
	/**
	 * Init plugin Dropbox
	 */
	public function Init() {

        parent::Init();

        $this->Viewer_AppendScript(Plugin::GetTemplateWebPath(__CLASS__) . "js/dropbox.js");
        $this->Viewer_AppendStyle(Plugin::GetTemplateWebPath(__CLASS__) . "css/dropbox.css");

	}
}