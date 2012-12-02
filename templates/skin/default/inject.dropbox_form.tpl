<script type="text/javascript" src="https://www.dropbox.com/static/api/1/dropbox.js" id="dropboxjs" data-app-key="{$oConfig->GetValue('plugin.dropbox.appKey')}"></script>

<form method="POST" action="" enctype="multipart/form-data" id="block_upload_img_content_dropbox" onsubmit="return false;" style="display: none;" class="tab-content js-block-upload-img-content" data-type="dropbox">


    <img src="{$aTemplateWebPathPlugin.dropbox}images/dropbox.jpg" align="left" id="image_upload_dropbox_preview">

    <p>
        <button class="button dropbox dropbox_linker">{$aLang.plugin.dropbox.select_file}</button>
    </p>

    <p>
        <input type="hidden" name="img_url" id="dropbox_url" value="http://" />

        <label>{$aLang.uploadimg_align}:</label>
        <label><input name="align" value="" type="radio"> {$aLang.uploadimg_align_no}</label>
        <label><input name="align" value="left" type="radio"> {$aLang.uploadimg_align_left}</label>
        <label><input name="align" value="right" type="radio"> {$aLang.uploadimg_align_right}</label>
        <label><input name="align" value="center" type="radio"> {$aLang.uploadimg_align_center}</label>
    </p>

    <div class="clearfix"></div>

    <p>
        <label for="form-image-url-title">{$aLang.uploadimg_title}:</label>
            <input type="text" name="title" id="form-image-url-title" value="" class="input-text input-width-full" />
    </p>

    {hook run="uploadimg_link_additional"}


    <button type="submit"  class="button button-primary" onclick="ls.ajaxUploadImg('block_upload_img_content_dropbox','{$sToLoad}');">{$aLang.uploadimg_link_submit_load}</button>
    <button type="submit"  class="button jqmClose">{$aLang.uploadimg_cancel}</button>

    <p class="block_upload_img_dropbox_author"><a style="color: silver" href="http://dropbox-for-livestreet.ru">Plugin Dropbox</a> by <a style="color: silver" href="http://sergeymarin.com#ls-dropbox">Sergey Marin</a></p>
</form>