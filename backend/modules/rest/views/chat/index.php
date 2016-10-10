<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
backend\assets\ChatAsset::register($this);
$this->registerJs('begin_chat()',\yii\web\View::POS_LOAD);

?>



<!--<body onload="connect();">-->

<div class="container">
    <div class="row clearfix">
        <div class="col-md-6 column">
            <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Direct Chat</h3>

                    <div class="box-tools pull-right">
                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="direct-chat-messages" id="dialog">
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="/adminlte/dist/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="/adminlte/dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <form onsubmit="onSubmit(); return false;">
                        <select style="margin-bottom:8px" id="client_list">
                            <option value="all">所有人</option>
                        </select>
                        <div class="input-group">
                            <input type="text" name="message" id="textarea" placeholder="Type Message ..." class="form-control">
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-warning btn-flat">Send</button>
                          </span>
                        </div>
                    </form>
                </div>
                <!-- /.box-footer-->
            </div>
        </div>
        <div class="col-md-3 column ">

        <?= backend\widgets\friend\FriendWidget::widget()?>
            <div class="thumbnail">
                <div class="caption" id="userlist"></div>
            </div>
            <a href="http://workerman.net:8383" target="_blank"><img style="width:252px;margin-left:5px;" src="/img/workerman-todpole.png"></a>

        </div>
        </div>

</div>
<!--<script src="/assets/460c13ac/jquery.js"></script>-->
<!--<script type="text/javascript">

    //get_user();
    if (typeof console == "undefined") {    this.console = { log: function (msg) {  } };}
    WEB_SOCKET_SWF_LOCATION = "/chat/swf/WebSocketMain.swf";
    WEB_SOCKET_DEBUG = true;
    //var ws, name, client_list={},user_data;
    //var ws, name, client_list={},user_data;


    // 连接服务端
    function connect() {
        // 创建websocket
        //ws = new WebSocket("ws://"+document.domain+":7272");
        // 当socket连接打开时，输入用户名
        //ws.onopen = onopen;
        // 当有消息时根据消息类型显示不同信息
        ws.onmessage = onmessage;
        /*ws.onclose = function() {
            console.log("连接关闭，定时重连");
            connect();
        };
        ws.onerror = function() {
            console.log("出现错误");
        };*/
    }

    // 连接建立时发送登录信息
    function onopen()
    {
        if(!name)
        {
            show_prompt();
        }
        // 登录
        var login_data = '{"type":"login","client_name":"'+name.replace(/"/g, '\\"')+'","room_id":"1"}';
        console.log("websocket握手成功，发送登录数据:"+login_data);
        ws.send(login_data);
    }
    function get_user(){
        $.get('/rest/user/view?id=1',function(data,status){
            //alert(data['username']);
            name = data['username'];
            user_data =data;
            //console.log(status);
        })
    }

    // 服务端发来消息时
    function onmessage(e)
    {
        console.log(e.data);
        var data = eval("("+e.data+")");
        switch(data['type']){
            // 服务端ping客户端
            case 'ping':
                ws.send('{"type":"pong"}');
                break;
            // 登录 更新用户列表
            case 'login':
                //{"type":"login","client_id":xxx,"client_name":"xxx","client_list":"[...]","time":"xxx"}
                say(data['client_id'], data['client_name'],  data['client_name']+' 加入了聊天室', data['time']);
                if(data['client_list'])
                {
                    client_list = data['client_list'];
                }
                else
                {
                    client_list[data['client_id']] = data['client_name'];
                }
                flush_client_list();
                console.log(data['client_name']+"登录成功");
                break;
            // 发言
            case 'say':
                //{"type":"say","from_client_id":xxx,"to_client_id":"all/client_id","content":"xxx","time":"xxx"}
                say(data['from_client_id'], data['from_client_name'], data['content'], data['time']);
                break;
            // 用户退出 更新用户列表
            case 'logout':
                //{"type":"logout","client_id":xxx,"time":"xxx"}
                say(data['from_client_id'], data['from_client_name'], data['from_client_name']+' 退出了', data['time']);
                delete client_list[data['from_client_id']];
                flush_client_list();
        }
    }

    // 输入姓名
    function show_prompt(){
        name = prompt('输入你的名字：', '');
        if(!name || name=='null'){
            name = '游客';
        }
    }

    // 提交对话
    function onSubmit() {
        var input = document.getElementById("textarea");
        var to_client_id = $("#client_list option:selected").attr("value");
        var to_client_name = $("#client_list option:selected").text();
        ws.send('{"type":"say","to_client_id":"'+to_client_id+'","to_client_name":"'+to_client_name+'","content":"'+input.value.replace(/"/g, '\\"').replace(/\n/g,'\\n').replace(/\r/g, '\\r')+'"}');
        input.value = "";
        input.focus();
    }

    // 刷新用户列表框
    function flush_client_list(){
        var userlist_window = $("#userlist");
        var client_list_slelect = $("#client_list");
        userlist_window.empty();
        client_list_slelect.empty();
        userlist_window.append('<h4>在线用户</h4><ul>');
        client_list_slelect.append('<option value="all" id="cli_all">所有人</option>');
        for(var p in client_list){
            userlist_window.append('<li id="'+p+'">'+client_list[p]+'</li>');
            client_list_slelect.append('<option value="'+p+'">'+client_list[p]+'</option>');
        }
        $("#client_list").val(select_client_id);
        userlist_window.append('</ul>');
    }

    // 发言
    function say(from_client_id, from_client_name, content, time){
       /* $("#dialog").append('<div class="speech_item">' +
            '<img src="http://lorempixel.com/38/38/?'+from_client_id+'" class="user_icon" /> '
            +from_client_name+' <br> '+time+'<div style="clear:both;"></div>' +
            '<p class="triangle-isosceles top">'+content+'</p> </div>');*/
        $("#dialog").append(' <div class="direct-chat-msg right"> <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">'
            +from_client_name+'</span> <span class="direct-chat-timestamp pull-right">'
            +time+'</span> </div> <img class="direct-chat-img" src="/adminlte/dist/img/user3-128x128.jpg" alt="message user image"> <div class="direct-chat-text">'
            +content+'</div></div>');


    }

    $(function(){
        select_client_id = 'all';
        $("#client_list").change(function(){
            select_client_id = $("#client_list option:selected").attr("value");
        });
    });
</script>-->
<script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F7b1919221e89d2aa5711e4deb935debd' type='text/javascript'%3E%3C/script%3E"));</script>
<?php
$this->registerJsFile('/chat/js/chat.js',['depends'=>'backend\assets\AdminLteAsset','position'=>\yii\web\View::POS_END]);

?>

