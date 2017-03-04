/**
 * Created by xq on 16-7-27.
 */

if (typeof console == "undefined") {    this.console = { log: function (msg) {  } };}
WEB_SOCKET_SWF_LOCATION = "/swf/WebSocketMain.swf";
WEB_SOCKET_DEBUG = true;
var ws, client_list={};

// 连接服务端
function connect() {
    // 创建websocket
    ws = new WebSocket("ws://"+document.domain+":7272");
    // 当socket连接打开时，输入用户名
    ws.onopen = onopen;
    // 当有消息时根据消息类型显示不同信息
    ws.onmessage = onmessage?onmessage:oninfo;
    ws.onclose = function() {
        console.log("连接关闭，定时重连");
        connect();
    };
    ws.onerror = function() {
        console.log("出现错误");
    };
}

// 连接建立时发送登录信息
function onopen()
{
    /*if(!name)
    {
        show_prompt();
    }*/
    // 登录
    var login_data = '{"type":"login","client_userid":"'+userid+'","room_id":1}';
    console.log("websocket握手成功，发送登录数据:"+login_data);
    ws.send(login_data);
}

// 服务端发来消息时
function oninfo(e)
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
            $('.label-warning').text(2);
            //{"type":"login","client_id":xxx,"client_userid":"xxx","client_list":"[...]","time":"xxx"}
            say(data['client_id'], data['client_userid'],  data['client_userid']+' 加入了聊天室', data['time']);

            if(data['client_list'])
            {
                client_list = data['client_list'];
            }
            else
            {
                client_list[data['client_id']] = data['client_userid'];
            }
            //flush_client_list();
            console.log(data['client_userid']+"登录成功");
            break;
        // 发言
        /*case 'say':
            //{"type":"say","from_client_id":xxx,"to_client_id":"all/client_id","content":"xxx","time":"xxx"}
            say(data['from_client_id'], data['from_client_userid'], data['content'], data['time']);
            break;*/
        // 用户退出 更新用户列表
        /*case 'logout':
            //{"type":"logout","client_id":xxx,"time":"xxx"}
            say(data['from_client_id'], data['from_client_userid'], data['from_client_userid']+' 退出了', data['time']);
            delete client_list[data['from_client_id']];
            flush_client_list();*/
    }
}


// 发言
/*function say(from_client_id, from_client_userid, content, time){
    $("#dialog").append('<div class="speech_item"><img src="http://lorempixel.com/38/38/?'+from_client_id+'" class="user_icon" /> '+from_client_userid+' <br> '+time+'<div style="clear:both;"></div><p class="triangle-isosceles top">'+content+'</p> </div>');
}*/

$(function(){
    connect();
    //begin_chat();
    select_client_id = 'all';
    $("#client_list").change(function(){
        select_client_id = $("#client_list option:selected").attr("value");
    });
});
