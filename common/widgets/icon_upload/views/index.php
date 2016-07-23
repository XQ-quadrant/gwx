<?php
/**
 * @see Yii中文网  http://www.yii-china.com
 * @author Xianan Huang <Xianan_huang@163.com>
 * 图片上传组件
 * 如何配置请到官网（Yii中文网）查看相关文章
 */
 
use yii\helpers\Html;
?>
<div class="per_upload_con" data-url="<?=$config['serverUrl']?>">
    <div class="per_real_img <?=$attribute?>" domain-url = "<?=$config['domain_url']?>"><?=isset($inputValue)?'<img id=\'vv\' src="'.$config['domain_url'].$inputValue.'">':''?></div>
    <div class="per_upload_img">图片上传</div>
    <div class="per_upload_text">
        <p class="upbtn"><a id="<?=$attribute?>" href="javascript:;" class="btn btn-info  choose_btn">选择图片</a></p>
        <p class="rule">仅支持文件格式为jpg、jpeg、png以及gif<br>大小在1MB以下的文件</p>
    </div>
    <input id='cc' up-id="<?=$attribute?>" type="hidden" name="<?=$inputName?>" upname='<?=$config['fileName']?>' value="<?=isset($inputValue)?$inputValue:''?>" filetype="img" />
</div>
<style>
    .container {
        width: 400px;
        margin: 40px auto 0 auto;
        position: relative;
        font-family: 微软雅黑;
        font-size: 12px;
    }
    .container p {
        line-height: 12px;
        line-height: 0px;
        height: 0px;
        margin: 10px;
        color: #bbb
    }
    .action {
        width: 400px;
        height: 30px;
        margin: 10px 0;
    }
    .cropped {
        position: absolute;
        right: -230px;
        top: 0;
        width: 200px;
        border: 1px #ddd solid;
        height: 460px;
        padding: 4px;
        box-shadow: 0px 0px 12px #ddd;
        text-align: center;
    }
    .imageBox {
        position: relative;
        height: 400px;
        width: 400px;
        border: 1px solid #aaa;
        background: #fff;
        overflow: hidden;
        background-repeat: no-repeat;
        cursor: move;
        box-shadow: 4px 4px 12px #B0B0B0;
    }
    .imageBox .thumbBox {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 200px;
        height: 200px;
        margin-top: -100px;
        margin-left: -100px;
        box-sizing: border-box;
        border: 1px solid rgb(102, 102, 102);
        box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
        background: none repeat scroll 0% 0% transparent;
    }
    .imageBox .spinner {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        text-align: center;
        line-height: 400px;
        background: rgba(0,0,0,0.7);
    }
    .Btnsty_peyton{ float: right;
        width: 66px;
        display: inline-block;
        margin-bottom: 10px;
        height: 57px;
        line-height: 57px;
        font-size: 20px;
        color: #FFFFFF;
        margin:0px 2px;
        background-color: #f38e81;
        border-radius: 3px;
        text-decoration: none;
        cursor: pointer;
        box-shadow: 0px 0px 5px #B0B0B0;
        border: 0px #fff solid;}
    /*选择文件上传*/
    .new-contentarea {
        width: 165px;
        overflow:hidden;
        margin: 0 auto;
        position:relative;float:left;
    }
    .new-contentarea label {
        width:100%;
        height:100%;
        display:block;
    }
    .new-contentarea input[type=file] {
        width:188px;
        height:60px;
        background:#333;
        margin: 0 auto;
        position:absolute;
        right:50%;
        margin-right:-94px;
        top:0;
        right/*\**/:0px\9;
        margin-right/*\**/:0px\9;
        width/*\**/:10px\9;
        opacity:0;
        filter:alpha(opacity=0);
        z-index:2;
    }
    a.upload-img{
        width:165px;
        display: inline-block;
        margin-bottom: 10px;
        height:57px;
        line-height: 57px;
        font-size: 20px;
        color: #FFFFFF;
        background-color: #f38e81;
        border-radius: 3px;
        text-decoration:none;
        cursor:pointer;
        border: 0px #fff solid;
        box-shadow: 0px 0px 5px #B0B0B0;
    }
    a.upload-img:hover{
        background-color: #ec7e70;
    }

    .tc{text-align:center;}

</style>
<div class="container">
    <div class="imageBox">
        <div class="thumbBox"></div>
        <div class="spinner" style="display: none">Loading...</div>
    </div>
    <div class="action">
        <!-- <input type="file" id="file" style=" width: 200px">-->
        <div class="new-contentarea tc"> <a href="javascript:void(0)" class="upload-img">
                <label for="upload-file">上传图像</label>
            </a>
            <input type="file" class="" name="upload-file" id="upload-file" />
        </div>
        <input type="button" id="btnCrop"  class="Btnsty_peyton" value="裁切">
        <input type="button" id="btnZoomIn" class="Btnsty_peyton" value="+"  >
        <input type="button" id="btnZoomOut" class="Btnsty_peyton" value="-" >

    </div>
    <div class="cropped"></div>
</div>
<?php
$js =<<<EOT
    $(window).load(function() {
        var options =
        {
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: '/images/avatar.jpg'
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
            $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:64px;margin-top:4px;border-radius:64px;box-shadow:0px 0px 12px #7E7E7E;" ><p>64px*64px</p>');
            $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:128px;margin-top:4px;border-radius:128px;box-shadow:0px 0px 12px #7E7E7E;"><p>128px*128px</p>');
            $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:180px;margin-top:4px;border-radius:180px;box-shadow:0px 0px 12px #7E7E7E;"><p>180px*180px</p>');
            $('#cc').val(img);
            $('#vv').attr("src",img);
        })
        $('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        })
        $('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        })
    });
EOT;
$this->registerJs($js);
?>
