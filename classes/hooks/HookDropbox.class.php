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

class PluginDropbox_HookDropbox extends Hook {


    public function RegisterHook() {
		$this->AddHook('template_modal_image_upload_nav', 'AddDropboxNav', __CLASS__, 2);
		$this->AddHook('template_modal_image_upload_form', 'AddDropboxForm', __CLASS__, 2);
        $this->AddHook('template_content_end', 'TemplateContentEnd', __CLASS__, 2);
	}

    public function AddDropboxNav($aVars)
    {
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'/inject.dropbox_nav.tpl');
	}

    public function AddDropboxForm($aVars)
    {
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'/inject.dropbox_form.tpl');
    }

    public function TemplateContentEnd($aVars)
    {
        if ($this->PluginDropbox_Dropbox_Check()) {
            return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'/dropbox.counter.tpl');
        }
    }
}