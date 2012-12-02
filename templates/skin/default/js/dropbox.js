$(function(){

    $('.dropbox_linker').click(function(e){

        Dropbox.choose( {
            linkType: "direct",
            success: function(files) {
                var file = files[0];
                if (file) {
                    var thumbs=file.thumbnails;
                    if (thumbs['200x200']) {
                        $('#dropbox_url').val(files[0].link);
                        $('#image_upload_dropbox_preview').attr('src', thumbs['200x200']);
                    } else {
                        alert('Файл не является изображением');
                    }
                }
            }
        });

    });

});