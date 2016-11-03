/**
 * Created by xq on 16-7-24.
 */
$(window).load(function() {

    var options =
    {
        thumbBox: '.thumbBox',
        spinner: '.spinner',
        imgSrc: $('#cc').val(),
    }
    var cropper = $('.imageBox').cropbox(options);
    $('#upload-file').on('change', function(){
        var reader = new FileReader();
        reader.onload = function(e) {
            options.imgSrc = e.target.result;
            cropper = $('.imageBox').cropbox(options);
        }
        reader.readAsDataURL(this.files[0]);
        this.files = [];
    })
    $('#btnCrop').on('click', function(){
        var img = cropper.getDataURL();

        $('.cropped').html('');
        $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:48px;margin-top:4px;border-radius:48px;box-shadow:0px 0px 12px #7E7E7E;" ><p>48px*48px</p>');
        $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:64px;margin-top:4px;border-radius:64px;box-shadow:0px 0px 12px #7E7E7E;"><p>64px*64px</p>');
        $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:100px;margin-top:4px;border-radius:100px;box-shadow:0px 0px 12px #7E7E7E;"><p>100px*100px</p>');
       /* var input= $('#upfile');
        input.attr('from', $('.choose_btn').attr('id'));
        //input.click();
        input.prop('files',img);
        var upimg = function(){
            var from=$('#upfile').attr('from');
            var thisUrl = $('.'+from).parent().attr('data-url');
            var thisType = $(this).attr('filetype'),
                maxSize  = 1*1024*1024;
            $(this).upload({
                url     : thisUrl,
                maxSize : maxSize,
                img : {
                    img : ['jpg','JPG','jpeg','JPEG','gif','GIF','png','PNG']
                },
                sucFn   : function(json){
                    var from=$('#upfile').attr('from');
                    var domainUrl = $('.'+from).attr('domain-url');
                    json = $.parseJSON(json);
                    if(json.state == 'SUCCESS'){
                        $('input[up-id='+ from+']').val(json.url);
                        $('.'+ from).html($('<img />').attr('src', domainUrl+json.url));
                    }else{
                        alert(json.state);
                    }
                }
            });
        };
        upimg();*/
        //alert(input.val());

        $('#cc').val(img);
        $('#vv').attr('src',img);

        /////
        /*var from=$('#upfile').attr('from');
        var thisUrl = $('.'+from).parent().attr('data-url');
        var thisType = $(this).attr('filetype'),
            maxSize  = 1*1024*1024;
        $('.file_upload').upload({
            url     : thisUrl,
            maxSize : maxSize,
            img : {
                img : ['jpg','JPG','jpeg','JPEG','gif','GIF','png','PNG']
            },
            sucFn   : function(json){
                var from=$('#upfile').attr('from');
                var domainUrl = $('.'+from).attr('domain-url');
                json = $.parseJSON(json);
                if(json.state == 'SUCCESS'){
                    $('input[up-id='+ from+']').val(json.url);
                    $('.'+ from).html($('<img />').attr('src', domainUrl+json.url));
                }else{
                    alert(json.state);
                }
            }
        });*/
        ////
    })
    $('#btnZoomIn').on('click', function(){
        cropper.zoomIn();
    })
    $('#btnZoomOut').on('click', function(){
        cropper.zoomOut();
    })
});